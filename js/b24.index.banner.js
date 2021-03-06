(function($) {
    'use strict';

    var $banner = $('.b-index-bnn');



    var fnInitialize = function() {
        $banner.find('.b-clouds').jsBannerClouds();
        $banner.jsBanner();

        setTimeout(function() {
            $banner.addClass('m-transition');

            $banner.find('.r-free').css({ marginRight: -1000 }).fadeIn(800)
                .animate({ marginRight: 0 }, { duration: 800, queue: false, easing: 'easeOutCubic', complete: function() {
                    $(this).css({ marginRight: '' });
                }});
        }, 100);

        if ($.xBrowser.name === 'ie' && parseInt($.xBrowser.version) <= 8) {
            $('.js-ie-fix, .js-ie-fix-list > li').acIEFix();
        }
    };



    


   
}(jQuery));



(function($) {
    'use strict';

    $.fn.jsBannerClouds = (function() {

        var Cloud = function(el) {
            this.$el = $(el);
            this.$container = this.$el.parent();

            $.extend(this, {
                width: this.$el.width(),
                height: this.$el.height(),
                cWidth: this.$container.width()
            });

            this.start();
            $(window).on('resize', $.proxy(this.onResize, this));
        };

        $.extend(Cloud.prototype, {

            MIN_SPEED: 25,
            MAX_SPEED: 100,
            MIN_TIMEOUT: 2500,
            MAX_TIMEOUT: 10000,

            start: function() {
                $.extend(this, {
                    left: parseInt(this.$el.css('left'), 10),
                    speed: this.MIN_SPEED + Math.round(Math.random() * (this.MAX_SPEED - this.MIN_SPEED))
                });
                this.dir = this.left < 0 ? 1 : -1;

                this.move();
            },

            move: function() {
                var dest = (this.cWidth / 2 + (this.dir > 0 ? 0 : this.width)) * this.dir,
                    time = Math.round(Math.abs(dest - this.left) / this.speed);

                this.$el.animate({ left: dest }, time * 1000, 'linear', $.proxy(function() {
                    var timeout = this.MIN_TIMEOUT + Math.round(Math.random() * (this.MAX_TIMEOUT - this.MIN_TIMEOUT));
                    setTimeout($.proxy(function() {
                        this.start();
                    }, this), timeout);
                }, this));
            },

            onResize: function() {
                this.$el.stop();
                this.cWidth = this.$container.width();

                this.move();
            }
        });

        return function() {
            return this.each(function() {
                $(this).find('> li').each(function() {
                    new Cloud(this);
                });
            });
        };
    }());



    $.fn.jsBannerCarousel = (function() {

        var Carousel = function(el, params) {
            $.extend(this, {
                index: 0,
                duration: 500,
                easing: 'easeInOutQuad'
            }, params, {
                $el: $(el)
            });

            this.initialize();
            this.$el.data('jsBannerCarousel', this);
        };
        var $menu = $('.b-index-bnn').find('.r-menu > li');
        $.extend(Carousel.prototype, {

            RADIUS: 422,

            initialize: function() {
                this.$items = this.$el.find('> li');
                this.angle = 360 / this.$items.length;

                this.$items.each($.proxy(function(i, el) {
                    $(el).css(this.angle2pos((i + this.index) * this.angle));
                }, this));

                this.$items.eq(-this.index).addClass('is-active');
            },

            angle2pos: function(angle) {
                return {
                    top: -Math.cos(angle / 180 * Math.PI) * this.RADIUS,
                    left: Math.sin(angle / 180 * Math.PI) * this.RADIUS
                };
            },

            set: function(newIndex) {
                this.$items.removeClass('is-active').eq(newIndex).addClass('is-active');
                this.$items.removeClass('is-active').find('a').attr('href', '#');
                this.$items.eq(newIndex).addClass('is-active').find('a').attr('href', newIndex !== 0 ? $menu.eq(newIndex-1).find('a').attr('href') : '#');

                var _this = this,
                    dAngle = -(this.$items.length + newIndex - this.index) % this.$items.length * this.angle;

                if (dAngle < -180) {
                    dAngle += 360;
                }

                this.$el.css({ b24animate: 0 }).animate({ b24animate: 1 }, { duration: this.duration, easing: this.easing,
                    step: function(now, fx) {
                        _this.$items.each(function(i, el) {
                            i = -_this.index + i;
                            $(el).css(_this.angle2pos(i * _this.angle + dAngle * fx.pos));
                        });
                    },
                    complete: function() {
                        _this.index = newIndex;
                        $(this).css({ b24animate: '' });
                    }
                });
                return $.when(this.$el);
            }
        });

        return function(params) {
            return this.each(function() {
                new Carousel(this, params);
            });
        };
    }());



    $.fn.jsBanner = function() {
        return this.each(function() {
            var $banner = $(this),
                $heading = $banner.find('h2 a'),
                $menu = $banner.find('.r-menu > li'),
                $text = $banner.find('.r-text > li'),
                $details = $banner.find('.r-details .e-button'),
                $free = $banner.find('.r-free'),

                index = 0,
                auto = true,

                $carousel = $banner.find('.b-carousel').jsBannerCarousel({ index: index }),
                oCarousel = $carousel.data('jsBannerCarousel'),
                $aCarousel = $carousel.find('> li'),

                $bList = $banner.find('.b-bnn-list').jsBannerList(),
                oBList = $bList.data('jsBannerList'),

                $prev = $banner.find('.e-arrow.n-prev'),
                $next = $banner.find('.e-arrow.n-next'),

                length = oCarousel.$items.length,
                busy = false,
                idTimeout = null,
                timeout = 2500,
                tFade = 500,

                prev = function() {
                    set((length + index - 1) % length);
                },

                next = function() {
                    set((index + 1) % length);
                },

                set = function(newIndex) {
                    if (busy || newIndex === index) { return; }
                    busy = true;
                    auto && stop();

                    setMenu(newIndex);
                    setDetails(newIndex);
                    showFree();

                    var dComplete = $.Deferred();

                    hide(index).done(function() {
                        setTimeout(function() {
                            show(newIndex).done(function() {
                                dComplete.resolve();
                            });
                        }, 200);
                    });

                    $.when(oCarousel.set(newIndex)).done(function() {
                        index = newIndex;
                        busy = false;
                    });

                    $.when(dComplete).done(function() {
                        auto && start();
                    });
                },

                setDetails = (function() {
                    var url0 = $heading.attr('href');

                    return function(index) {
                        $details.attr('href', index === 0 ? url0 : $menu.eq(index - 1).find('a').attr('href'));
                    };
                }()),

                showFree = (function() {
                    var w = $free.width(),
                        isHover = false,
                        duration = 400,

                        show = function() {
                            $free.stop().animate({ width: w }, duration, 'easeInQuad');
                        },

                        hide = function() {
                            $free.stop().animate({ width: 0 }, duration, 'easeOutQuad');
                        };

                    $free.find('.e-text').outerWidth(w);

                    $free.hover(function() {
                        isHover = true;
                        //show();
                    }, function() {
                        isHover = false;
                        //hide();
                    });

                    return function() {
                        !isHover && hide();
                        setTimeout(function() {
                            show();
                        }, duration);
                    };
                }()),

                setMenu = function(index) {
                    $menu.removeClass('is-active');
                    if (index > 0) {
                        $menu.eq(index - 1).addClass('is-active');
                    }
                },

                show = function(index) {
                    return $.when(
                        oBList.show(index),
                        $text.hide().eq(index).css({ display: 'table-cell', opacity: 0 }).fadeTo(tFade, 1, function() {
                            $(this).css({ opacity: '' });
                        })
                    );
                },

                hide = function(index) {
                    return $.when(
                        oBList.hide(index),
                        $text.filter(':visible').add($text.eq(index)).fadeOut(tFade)
                    );
                },

                start = function() {
                    idTimeout = setTimeout(function() {
                        next();
                    }, timeout);
                },

                stop = function() {
                    clearTimeout(idTimeout);
                };

            setMenu(index);
            show(index);
            setDetails(index);
            auto && start();

            $prev.on('click', prev);
            $next.on('click', next);
            $heading.on('click', function(e) {
                set(0);
            });
            $menu.find('a').on('click', function() {
                set($menu.index($(this).closest('li')) + 1);
            });
            $carousel.find('a').on('click', function(e) {
                if(!$(this).closest('li').hasClass('is-active') || $(this).attr('href') === '#'){
                  e.preventDefault();
                }
                set($aCarousel.index($(this).closest('li')));
            });
        });
    };
}(jQuery));


var countGap = 0;
(function($) {
    'use strict';

    $.fn.jsBannerList = (function() {

        var BannerList = function(el) {
            $.extend(this, {
                $el: $(el),
                action: 0, // 0 - none, 1 - show, 2 - hide, 3 - hide forced
                iCurrent: -1,
                iShow: -1
            });

            this.$el.data('jsBannerList', this);

            this.$items = this.$el.find('> li').each(function(index, el) {
                eval('MiniBanner' + index)(el);
            });
        };

        $.extend(BannerList.prototype, {

            show: function(index) {
                if (this.action !== 0) { return; }

                var _this = this,
                    dComplete = $.Deferred(),
                    $el = this.$items.eq(index);

                this.action = 1;
                this.iShow = index;
                $el.acRestart();

                $.when($el.data('jsMiniBanner').show()).done(function() {
                    if (_this.action === 1 && index === _this.iShow) {
                        _this.action = 0;
                        _this.iCurrent = _this.iShow;
                        _this.iShow = -1;
                        dComplete.resolve();
                    }
                });

                return dComplete;
            },

            hide: (function() {
                var dComplete = null,

                    onHide = function() {
                        this.action = 0;
                        dComplete.resolve();
                    };

                return function() {
                    var _this = this,
                        $el;

                    dComplete = $.Deferred();

                    switch (this.action) {
                        case 0:
                            this.action = 2;
                            $el = this.$items.eq(this.iCurrent);
                            $.when($el.data('jsMiniBanner').hide()).done(function() {
                                onHide.call(_this);
                            });
                            break;
                        case 1:
                            this.action = 3;
                            $el = this.$items.eq(this.iShow);
                            $.when($el.acHideForced()).done(function() {
                                onHide.call(_this);
                            });
                            break;
                    }

                    return dComplete;
                };
            }())
        });

        return function() {
            return this.each(function() {
                new BannerList(this);
            });
        };
    }());



    var tShow = 600,
        tHide = 400,
        tSleep = tShow / 2,
        tSleep2 = tSleep * 0.75,
        tDelay = tSleep / 2,
        tDelay2 = tDelay / 2,
        showEasing = 'easeOutQuart',
        hideEasing = 'easeInQuart',

        fnShowCircles = function($el, cb) {
            $el.find('.r-circle > li').acShowList('B', { tSleep: 0 }, cb || $.noop);
        };




    var MiniBanner0 = function(el) {
        $(el).each(function() {
            var $el = $(this),
                $aList = $el.find('.r-list > li');

            var fn = {
                show: function() {
                    if(countGap === 0){;
                      countGap = false;
                      $el.find('.r-list > li.n1').css({visibility: 'visible', margin: 0});
                      return $.when($aList.not('.n1').acShowList('M B', { easing: showEasing }));
                    }
                    else{
                      return $.when($aList.acShowList('M B', { easing: showEasing }));
                    }
                },

                hide: function() {
                    return $.when($aList.acHide('M B', hideEasing));
                }
            };

            $el.data('jsMiniBanner', fn);
        });
    };



    var MiniBanner1 = function(el) {
        $(el).each(function() {
            var $el = $(this),
                $aMessage = $el.find('.r-message > li'),
                $msg0 = $aMessage.eq(0),
                $msg1 = $aMessage.eq(1);

            var showMessage0 = function(cb) {
                    var $msg = $aMessage.eq(0);

                    $msg.acShow('B', tShow, tDelay, function() {
                        $msg.find('.r-like > li').acShowList('O', { tShow: tShow * 0.5, tDelay: tShow + tDelay });
                        setTimeout(function() {
                            $msg.find('.e-like-popup').acShow('O', tShow * 0.75, tSleep * 1.25, cb || $.noop);
                        }, tDelay + tShow);
                    });
                },

                showMessage1 = function(cb) {
                    var $msg = $aMessage.eq(1);

                    $msg.acShow('H', tShow * 0.75, tDelay, function() {
                        $msg.find('.e-like').acShow('O', tShow * 0.5, 0, function() {
                            $msg.find('.r-comment > li').acShowList('O', { tShow: tShow * 0.5, tDelay: tShow * 0.5, tSleep: 0 }, cb || $.noop);
                        });
                    });
                };

            var showMessage = function(cb) {
                    $msg0.acShow('B', tShow, tSleep2, function() {
                        $msg1.acShow('H', tShow * 0.75, tDelay, cb);
                    });
                },

                showLike = function(cb) {
                    $.when(
                        $msg0.find('.r-like > li').acShowList('O', { tShow: tShow * 0.5, tDelay: tShow + tDelay }),
                        $msg0.find('.e-like-popup').delay(tDelay + tShow).acShow('O', tShow * 0.75),
                        $msg1.find('.e-like').acShow('O', tShow * 0.5),
                        $msg1.find('.r-comment > li').delay(tShow * 0.5 + tDelay2).acShowList('O', { tShow: tShow * 0.5, tDelay: tSleep2 })
                    ).done(cb || $.noop);
                };

            var fn = {
                show: function() {
                    var dComplete = $.Deferred();

                    fnShowCircles($el, function() {
                        showMessage(function() {
                            showLike(function() {
                                dComplete.resolve();
                            });
                        });
                    });

                    return dComplete;
                },

                hide: function() {
                    var dComplete = $.Deferred();

                    $msg1.find('.e-like, .r-comment > li').add($msg0.find('.e-like-popup, .r-like > li')).acHide();
                    $msg1.acHide('H', tHide, tDelay2, function() {
                        $el.find('.r-circle > li').acHide('O B');
                        $msg0.acHide('O', tHide, 0, function() {
                            dComplete.resolve();
                        });
                    });

                    return dComplete;
                }
            };

            $el.data('jsMiniBanner', fn);
        });
    };



    var MiniBanner2 = function(el) {
        $(el).each(function() {
            var $el = $(this),
                $task = $el.find('.r-task-wnd');

            var showWindows = function(cb) {
                    $task.add($el.find('.e-chart')).acShowList('M', { tDelay: tShow, easing: showEasing, tSleep: tSleep * 1.5 }, cb || $.noop);
                },

                complete = function(cb) {
                    $task.find('.e-timer').acShow('O', tShow, tSleep * 1.25, function() {
                        $task.find('.r-counter > li').acShowList('O', { tDelay: tShow + tSleep });
                        $task.find('.r-list > li').acShowList('O', { tDelay: tShow + tSleep, tSleep: 0 }, cb || $.noop);
                    });
                };

            var fn = {
                show: function() {
                    var dComplete = $.Deferred();

                    fnShowCircles($el, function() {
                        showWindows(function() {
                            complete(function() {
                                dComplete.resolve();
                            });
                        });
                    });

                    return dComplete;
                },

                hide: function() {
                    var dComplete = $.Deferred(),
                        $aCircle = $el.find('.r-circle > li');

                    $el.find('.e-chart').acHide('M', tHide, tDelay2, function() {
                        $.when(
                            $aCircle.acHide('B'),
                            $task.acHide('M')
                        ).done(function() {
                            dComplete.resolve();
                        });
                    });

                    return dComplete;
                }
            };

            $el.data('jsMiniBanner', fn);
        });
    };



    var MiniBanner3 = function(el) {
        $(el).each(function() {
            var $el = $(this),
                $aList = $el.find('.r-list > li');

            var showList = function(cb) {
                    $aList.acShowList('M', { tDelay: tShow, easing: showEasing }, cb || $.noop);
                };

            var fn = {
                show: function() {
                    var dComplete = $.Deferred();

                    fnShowCircles($el, function() {
                        showList(function() {
                            $el.find('.e-dots').acShow(function() {
                                dComplete.resolve();
                            });
                        });
                    });

                    return dComplete;
                },

                hide: function() {
                    var $aCircle = $el.find('.r-circle > li');

                    $el.find('.e-dots').acHide('O');
                    $aList.not('.n1').acHide('M', tHide, tDelay2, function() {
                        $aCircle.acHide('B');
                        $aList.eq(0).acHide('M');
                    });

                    return $.when($aList, $aCircle);
                }
            };

            $el.data('jsMiniBanner', fn);
        });
    };



    var MiniBanner4 = function(el) {
        $(el).each(function() {
            var $el = $(this);

            var showFileList = function(cb) {
                    $el.find('.e-avatar, .e-avatar span').acShow('B', tShow, tSleep * 0.25, showEasing, function() {
                        $el.find('.e-file-list').acShow('H', tShow * 0.75, tSleep * 1.25, cb || $.noop);
                    });
                },

                showMenu = function(cb) {
                    var $menu = $el.find('.r-menu');
                    $menu.acShow('O', tShow, tSleep * 0.5, function() {
                        $menu.find('.e-button, .e-popup').acShow(cb || $.noop);
                    });
                };

            var fn = {
                show: function() {
                    var dComplete = $.Deferred();

                    fnShowCircles($el);
                    setTimeout(function() {
                        showFileList(function() {
                            showMenu(function() {
                                dComplete.resolve();
                            });
                        });
                    }, tSleep * 2);

                    return dComplete;
                },

                hide: function() {
                    var dComplete = $.Deferred();

                    $el.find('.r-menu, .r-menu > *, .e-file-list').acHide('O', tHide, tDelay2, function() {
                        $el.find('.r-circle > li, .e-avatar, .e-avatar span').acHide('B O', tHide, 0, function() {
                            dComplete.resolve();
                        });
                    });

                    return dComplete;
                }
            };

            $el.data('jsMiniBanner', fn);
        });
    };



    var MiniBanner5 = function(el) {
        $(el).each(function() {
            var $el = $(this);

            var showUsers = function(cb) {
                    var $aUser = $el.find('.r-user > li'),

                        show = function($el, cb) {
                            $el.acShow('B', tShow, -tShow * 0.75, showEasing, cb || $.noop);
                        };

                    show($aUser.eq(0), function() {
                        show($el.find('.e-disk'), function() {
                            $aUser.not('.n1').acShowList('B', { easing: showEasing, tSleep: -tShow * 0.75 }, function() {
                                show($el.find('.e-circle'), function() {
                                    setTimeout(cb || $.noop, tShow * 0.75);
                                });
                            });
                        });
                    });
                },

                showFile = function(cb) {
                    var $aFile = $el.find('.r-file > li');

                    $el.find('.r-dots > li').acShow('O', tShow, tDelay, function() {
                        $aFile.eq(0).acShow('M O', tShow, tDelay, function() {
                            $aFile.not('.n1').acShow('M O', tShow * 1.2, 0, cb);
                        });
                    });
                };

            var fn = {
                show: function() {
                    var dComplete = $.Deferred();

                    showUsers(function() {
                        showFile(function() {
                            dComplete.resolve();
                        });
                    });

                    return dComplete;
                },

                hide: function() {
                    var dComplete = $.Deferred();

                    $el.find('.r-file > li').acHide('O', tHide, tDelay2, function() {
                        $.when(
                            $el.find('.r-user > li, .e-disk, .e-circle').acHide('B'),
                            $el.find('.r-dots > li').acHide('O')
                        ).done(function() {
                            dComplete.resolve();
                        });
                    });

                    return dComplete;
                }
            };

            $el.data('jsMiniBanner', fn);
        });
    };



    var MiniBanner6 = function(el) {
        $(el).each(function() {
            var $el = $(this),
                $popup = $el.find('.r-popup');

            var showCalendar = function(cb) {
                    $el.find('.r-calendar').acShow('M', tShow, tSleep, showEasing, cb);
                },

                showColumn = function(cb) {
                    var $col = $el.find('.r-column'),
                        $aCol = $col.find('> li');

                    $aCol.eq(0).acShow('O', function() {
                        $.when(
                            $col.animate({ margin: 0 }, tShow),
                            $aCol.eq(0).acHide('O', tShow),
                            $aCol.eq(1).acShow('O')
                        ).done(function() {
                            setTimeout(cb || $.noop, tSleep);
                        });
                    });
                },

                clickButton = function(cb) {
                    var $button = $popup.find('.e-button');

                    $button.acShow('O', tDelay, 0, function() {
                        $button.acHide('O', tDelay, tSleep2, function() {
                            $.when(
                                $popup.acHide('B M', tShow),
                                $el.find('.r-scheduler, .r-column > li').acHide('O', tShow)
                            ).done(cb);
                        });
                    });
                };

            var fn = {
                show: function() {
                    var dComplete = $.Deferred();

                    fnShowCircles($el, function() {
                        showCalendar(function() {
                            $el.find('.r-scheduler').acShow();
                            showColumn(function() {
                                $popup.acShow('B M', tShow, tSleep2, showEasing, function() {
                                    clickButton(function() {
                                        dComplete.resolve();
                                    });
                                });
                            });
                        });
                    });

                    return dComplete;
                },

                hide: function() {
                    var dComplete = $.Deferred();

                    $.when(
                        $el.find('.r-popup').acHide('B M'),
                        $el.find('.r-calendar').acHide('M')
                    ).done(function() {
                        setTimeout(function() {
                            $el.find('.r-circle > li').acHide('B', tHide, 0, function() {
                                dComplete.resolve();
                            });
                        }, tDelay2);
                    });

                    return dComplete;
                }
            };

            $el.data('jsMiniBanner', fn);
        });
    };



    var MiniBanner7 = function(el) {
        $(el).each(function() {
            var $el = $(this);

            var showWindows = function(cb) {
                $el.find('.r-window > li').acShowList('M', { tDelay: tShow * 0.75 }, cb);
            };

            var fn = {
                show: function() {
                    var dComplete = $.Deferred();

                    setTimeout(function() {
                        $el.find('.e-user').acShow('B');
                    }, tSleep);

                    fnShowCircles($el, function() {
                        showWindows(function() {
                            $el.find('.e-type').acShow('O', tShow, tSleep, function() {
                                dComplete.resolve();
                            });
                        });
                    });

                    return dComplete;
                },

                hide: function() {
                    var dComplete = $.Deferred();

                    $el.find('.e-type').acHide('O');
                    $el.find('.r-window > li').acHide('M', tHide, tDelay2, function() {
                        $el.find('.r-circle > li, .e-user').acHide('B', tHide, 0, function() {
                            dComplete.resolve();
                        });
                    });

                    return dComplete;
                }
            };

            $el.data('jsMiniBanner', fn);
        });
    };



    var MiniBanner8 = function(el) {
        $(el).each(function() {
            var $el = $(this),
                $aWnd = $el.find('.r-window > li');

            var showUser = function(cb) {
                    $el.find('.r-user > li').acShowList('O', { tDelay: tDelay * 1.5, tSleep: tSleep * 0.5 }, cb);
                },

                showStatus = function(cb) {
                    $aWnd.eq(1).acShow('B', tShow, tSleep * 0.5, function() {
                        $aWnd.find('.r-progress > li').acShowList('O', { tDelay: tDelay * 1.5 });
                        (cb || $.noop)();
                    });
                };

            var fn = {
                show: function() {
                    var dComplete = $.Deferred();

                    $el.find('.r-circle > li').acShowList('B', { tDelay: tSleep * 1.25, tSleep: -tSleep2 }, function() {
                        $aWnd.eq(0).acShow('B', tShow, tSleep2, function() {
                            showUser(function() {
                                showStatus(function() {
                                    $aWnd.eq(2).acShow('B', tShow, tSleep2, function() {
                                        $el.find('.e-phone').acShow('M', tShow, 0, function() {
                                            dComplete.resolve();
                                        });
                                    });
                                });
                            });
                        });
                    });

                    return dComplete;
                },

                hide: function() {
                    var dComplete = $.Deferred();

                    $el.find('.e-phone').acHide('M', tHide, tDelay2, function() {
                        $aWnd.add($el.find('.r-user > li, .r-progress > li')).acHide('O', tHide, tDelay2, function() {
                            $el.find('.r-circle > li').acHide('B', tHide, 0, function() {
                                dComplete.resolve();
                            });
                        });
                    });

                    return dComplete;
                }
            };

            $el.data('jsMiniBanner', fn);
        });
    };



    var MiniBanner9 = function(el) {
        $(el).each(function() {
            var $el = $(this),
                $aWnd = $el.find('.r-window > li');

            var fn = {
                show: function() {
                    var dComplete = $.Deferred();

                    $el.find('.r-circle > li').acShowList('B', { tDelay: tSleep * 1.25, tSleep: -tSleep * 0.25 }, function() {
                        $aWnd.acShowList('M', { tDelay: tShow + tDelay, tSleep: tDelay }, function() {
                            $el.find('.e-dots').acShow('O', tShow, 0, function() {
                                $el.find('.e-phone').acShow('B', tShow, 0, function() {
                                    dComplete.resolve();
                                });
                            });
                        });
                    });

                    return dComplete;
                },

                hide: function() {
                    var dComplete = $.Deferred();

                    $.when(
                            $el.find('.e-phone').acHide('B'),
                            $el.find('.e-dots').acHide(),
                            $aWnd.eq(1).acHide('M')
                        ).done(function() {
                            $aWnd.eq(0).acHide('M', tHide, 0, function() {
                                $el.find('.r-circle > li').acHide('B', tHide, 0, function() {
                                    dComplete.resolve();
                                });
                            });
                        });

                    return dComplete;
                }
            };

            $el.data('jsMiniBanner', fn);
        });
    };



    var MiniBanner10 = function(el) {
        $(el).each(function() {
            var $el = $(this),
                $aWnd = $el.find('.r-window > li');

            var fn = {
                show: function() {
                    var dComplete = $.Deferred();

                    $aWnd.eq(0).acShow('M', tShow, tDelay, function() {
                        $aWnd.eq(1).acShow('B M', tShow * 0.75, tDelay, function() {
                            $aWnd.eq(2).acShow('O', tShow, 0, function() {
                                dComplete.resolve();
                            });
                        });
                    });

                    return dComplete;
                },

                hide: function() {
                    var dComplete = $.Deferred();

                    $($aWnd.toArray().reverse()).acHideList('B O', { tDelay: tDelay * 1.75, tSleep: 0 }, function() {
                        dComplete.resolve();
                    });

                    return dComplete;
                }
            };

            $el.data('jsMiniBanner', fn);
        });
    };



    var MiniBanner11 = function(el) {
        $(el).each(function() {
            var $el = $(this);

            var fn = {
                show: function() {
                    var dComplete = $.Deferred();

                    fnShowCircles($el, function() {
                        setTimeout(function() {
                            $el.find('.r-phone > li').acShowList('B M', { tSleep: tSleep2 }, function() {
                                $el.find('.e-tablet').acShow('M', tShow, tSleep2, function() {
                                    $el.find('.e-platform').acShow('O', tShow, 0, function() {
                                        dComplete.resolve();
                                    });
                                });
                            });
                        }, tDelay);
                    });

                    return dComplete;
                },

                hide: function() {
                    var dComplete = $.Deferred();

                    $.when(
                        $el.find('.r-phone > li, .e-platform').acHide(),
                        $el.find('.e-tablet').acHide('M')
                    ).done(function() {
                        $el.find('.r-circle > li').acHide('B', tHide, 0, function() {
                            dComplete.resolve();
                        });
                    });

                    return dComplete;
                }
            };

            $el.data('jsMiniBanner', fn);
        });
    };



    var MiniBanner12 = function(el) {
        $(el).each(function() {
            var $el = $(this);

            var fn = {
                show: function() {
                    var dComplete = $.Deferred();

                    fnShowCircles($el, function() {
                        $el.find('.r-window > li').acShowList('M', { tDelay: tShow * 0.75, tSleep: -tSleep }, function() {
                            $el.find('.e-popup').acShow('O', tShow, 0, function() {
                                dComplete.resolve();
                            });
                        });
                    });

                    return dComplete;
                },

                hide: function() {
                    var dComplete = $.Deferred();

                    $el.find('.e-popup').acHide('O');
                    $($el.find('.r-window > li').toArray().reverse()).acHideList('M', { tSleep: -tSleep }, function() {
                        $el.find('.r-circle > li').acHide('B', tHide, 0, function() {
                            dComplete.resolve();
                        });
                    });

                    return dComplete;
                }
            };

            $el.data('jsMiniBanner', fn);
        });
    };
}(jQuery));