var init1 = 0;
var reset_inited = 0;
var interval2;
function getBodyScrollTop(){
  return self.pageYOffset || (document.documentElement && document.documentElement.scrollTop) || (document.body && document.body.scrollTop);
}
var interval = new Array();
function outNum(boxid, num, elem, xtime) {
  var n = 0;

  var step = Math.ceil(num/xtime*30);

  var t = Math.round(xtime / (num / step));
   interval[boxid] = setInterval(() => {
    n = n + step;
    if (n >= num) {
      //console.log(n)
      clearInterval(interval[boxid]);
    }
    if(n>num){
      n = num;
    }
    elem.innerText = new Intl.NumberFormat('en-IN').format(n);
  }, t);
}
var svg_x,svg_y;
function getRandomInt(min, max) {
  min = Math.ceil(min);
  max = Math.floor(max);
  return Math.floor(Math.random() * (max - min)) + min; 
}
$(function(){
  if ($('#data-block').length){


    /*
    for(i=1; i<43; i++){
        $('#data__svg').prepend('<g data-n="'+i+'" class="svg-g"></g>');
    }
    
var zcounter = 1;
var zcounter2 = 0;
var randrect;
var zlength = $('#data__svg rect').length;
    for (i=0; i<zlength; i++){
      if (zcounter2 > 17) {
        zcounter2 = 0;
        zcounter++;
      }
      randrect = getRandomInt(0,$('#data__svg .all_rects rect').length);
     console.log( $('#data__svg .all_rects rect').eq(randrect).length+' '+$('#data__svg .svg-g[data-n="'+zcounter+'"]').length )
      if ($('#data__svg .all_rects rect').eq(randrect).length && $('#data__svg .svg-g[data-n="'+zcounter+'"]').length){
        
        $('#data__svg .svg-g[data-n="'+zcounter+'"]').append(document.querySelectorAll('#data__svg .all_rects rect')[randrect].outerHTML);
        $('#data__svg .all_rects rect').eq(randrect).remove();
      }
      

      zcounter2++;
    }
    */

      var data_fixed_top;
      var data_proc;
      var text_proc, text_proc1, text_proc2, text_proc3;

function scroll_data(){
  if ( 
            ($('#data-block').offset().top <= (getBodyScrollTop()  ) ) &&  
            (getBodyScrollTop()+ $(window).height()) < ($('#data-block').offset().top + $('#data-block').height() )  
            ){
            $('#data-block').addClass('fixed');
          $('#data-block').removeClass('fixed_bottom');
            
            /*
            data_fixed_top = getBodyScrollTop() - $('#data-block').offset().top;
          if (data_fixed_top<0) data_fixed_top=0;

            $('#data__fixed').css({'transform':'translateY('+data_fixed_top+'px)'});
        */
            
            
          } else if ( $('#data-block').offset().top > getBodyScrollTop()  ){
              //$('#data__fixed').css({'transform':'translateY(0px)'});  
               $('#data-block').removeClass('fixed');
               $('#data-block').removeClass('fixed_bottom');
          } else {
            $('#data-block').removeClass('fixed');
            $('#data-block').addClass('fixed_bottom');
          }


         if ( ( ($('#data-block').offset().top) <= (getBodyScrollTop() + $(window).height() ) ) && ($('#data-block').offset().top+$('#data-block').height()) > 
         (getBodyScrollTop() + $(window).height() )  ){
            $('#data__svg').removeClass('notmove');
            data_proc =  ($('#data-block').offset().top+$('#data-block').height())/( (getBodyScrollTop()+$(window).height())  ) - 1;
                      
              $('#data__svg .svg-g').each(function(){
                svg_x = data_proc*$(this).attr('data-x');
                svg_y = data_proc*$(this).attr('data-y');
                 if (svg_x<0) {
                    svg_x = svg_x+1.5;
                    if ( svg_x>0  ) svg_x = 0;
                  } else {
                    svg_x = svg_x-1.5;
                    if ( svg_x<0  ) svg_x = 0;
                  }
                   if (svg_y<0) {
                    svg_y = svg_y+1.5;
                     if ( svg_y>0  ) svg_y = 0;
                  } else {
                    svg_y = svg_y-1.5;
                    if ( svg_y<0  ) svg_y = 0;
                  }
                  $(this).css({'transform':'translate('+svg_x+'px,'+svg_y+'px)'});
              });

              text_proc = (getBodyScrollTop() - $('#data-block').offset().top  )/$('#data-block').height()*1.5;
              //if (text_proc<0) text_proc = 0;
              //console.log(text_proc)
              if (text_proc>=0){
                $('#data-block .data__list li').eq(0).css({'opacity':'1','transform':'translateY(0px)'})
              }  else {
                $('#data-block .data__list li').eq(0).css({'opacity':'0','transform':'translateY(20px)'});
              }
              if (text_proc>=0.3){            
                $('#data-block .data__list li').eq(1).css({'opacity':'1','transform':'translateY(0px)'})
              } else {
                $('#data-block .data__list li').eq(1).css({'opacity':'0','transform':'translateY(20px)'})
              }

              if (text_proc>=0.6){
                $('#data-block .data__list li').eq(2).css({'opacity':'1','transform':'translateY(0px)'})
              }  else  {            
                $('#data-block .data__list li').eq(2).css({'opacity':'0','transform':'translateY(20px)'})
              }
  
            } else if ( ($('#data-block').offset().top+$('#data-block').height()) <= (getBodyScrollTop() + $(window).height() )  ) {
                 $('#data__svg').addClass('notmove');
                 $('#data-block .data__list li').css({'opacity':'1','transform':'translateY(0px)'});
            } else {
              
            }
          
}

  if ( device.mobile()!=true && device.tablet()!=true ){

       $('.data__list *').each(function(){
        $(this).addClass('not-wow');
      });
      $('#data__svg .svg-g').each(function(){

        svg_x = getRandomInt(-170,170);
        svg_y = getRandomInt(-170,170);
        $(this).attr({'data-x':svg_x,'data-y':svg_y});

      });

      $(window).on("scroll", function(e) {
        scroll_data();
      });
      scroll_data();
    }
  }



   new WOW({
           
          boxClass:'wow_calback',     
          callback:function(box){
            if (box.id=='numb1'){
              setTimeout(function(){
                outNum(box.id,(box.getAttribute("data-number")-0), box,800);
              },200); 
            }
            if (box.id=='numb2'){
              setTimeout(function(){
                outNum(box.id,(box.getAttribute("data-number")-0), box,800);
              },300); 
            }
            if (box.id=='numb3'){
              setTimeout(function(){
                outNum(box.id,(box.getAttribute("data-number")-0), box,800);
              },350); 
            }
            if (box.id=='numb4'){
              setTimeout(function(){
                outNum(box.id,(box.getAttribute("data-number")-0), box,800);
              },450); 
            }
          }        
                    }).init();

  $(window).on("scroll", function(e) {
     $('.parallax').each(function(i){
        if ( $(this).offset().top <= (getBodyScrollTop() + $(window).height() ) ){
          let razn = (getBodyScrollTop() + $(window).height() ) - $(this).offset().top;
          if ( $(this).attr('id')=='featured__before' || $(this).attr('id')=='blog_posts_before'  ){
            $(this).css({'transform':'translate(-50%,-'+razn/20+'px)'});
          } else {
            $(this).css({'transform':'translateY(-'+razn/20+'px)'});
          }
          
        }
     })
      

  });

if ( device.mobile()!=true && device.tablet()!=true ){



/*
 * Shape Shifter
 * http://www.kennethcachia.com/shape-shifter
 * A canvas experiment
 */

'use strict';
var xIcons = '#icon icon-Financial|#icon icon-Business|#icon icon-Web|#icon icon-Product';

var S = {
  init: function () {
    var action = window.location.href,
        i = action.indexOf('?a=');

    S.Drawing.init('.canvas');
    S.ShapeBuilder.init();
    S.UI.init();
    document.body.classList.add('body--ready');

    if (i !== -1) {

      S.UI.simulate(decodeURI(action).substring(i + 3));
    } else { 
      S.UI.simulate(xIcons);
    }

    S.Drawing.loop(function () {
      S.Shape.render();
    });
  }
};


window.addEventListener('load', function () {
  setTimeout(function(){
    S.init();
  init1 = 1;
  },preloader_zz1);
});





S.Drawing = (function () {
  var canvas,
      context,
      renderFn,
      requestFrame = window.requestAnimationFrame       ||
                     window.webkitRequestAnimationFrame ||
                     window.mozRequestAnimationFrame    ||
                     window.oRequestAnimationFrame      ||
                     window.msRequestAnimationFrame     ||
                     function (callback) {
                        window.setTimeout(callback, 1000 / 60);
                      };

  return {
    init: function (el) {
      canvas = document.querySelector(el);
      context = canvas.getContext('2d');
      this.adjustCanvas();

      window.addEventListener('resize', function () {

        S.Drawing.adjustCanvas();
      });
    },

    loop: function (fn) {
      renderFn = !renderFn ? fn : renderFn;
      this.clearFrame();
      renderFn();
      requestFrame.call(window, this.loop.bind(this));
    },

    adjustCanvas: function () {
      canvas.width = window.innerWidth;
      canvas.height = window.innerHeight;
    },

    clearFrame: function () {
      context.clearRect(0, 0, canvas.width, canvas.height);
    },

    getArea: function () {
      return { w: canvas.width, h: canvas.height };
    },

    drawCircle: function (p, c) {
      context.fillStyle = c.render();
      context.beginPath();
      context.arc(p.x, p.y, p.z, 0, 2 * Math.PI, true);
      context.closePath();
      context.fill();
    }
  };
}());


S.Point = function (args) {
  this.x = args.x;
  this.y = args.y;
  this.z = args.z;
  this.a = args.a;
  this.h = args.h;
};


S.Color = function (r, g, b, a) {
  this.r = r;
  this.g = g;
  this.b = b;
  this.a = a;
};

S.Color.prototype = {
  render: function () {
    return 'rgba(' + this.r + ',' + this.g + ',' + this.b + ',' + this.a + ')';
  }
};


S.UI = (function () {
  var overlay = document.querySelector('.overlay'),
      canvas = document.querySelector('.canvas'),
      interval,
      isTouch = ('ontouchstart' in window || navigator.msMaxTouchPoints),
      currentAction,
      resizeTimer,
      time,
      maxShapeSize = 30,
      firstAction = true,
      sequence = [],
      sequence1 = [],
      cmd = '#';

  function formatTime(date) {
    var h = date.getHours(),
        m = date.getMinutes();

    m = m < 10 ? '0' + m : m;
    return h + ':' + m;
  }

  function getValue(value) {
    return value && value.split(' ')[1];
  }

  function getAction(value) {
    value = value && value.split(' ')[0];
    return value && value[0] === cmd && value.substring(1);
  }

  function timedAction(fn, delay, max, reverse) {
    clearInterval(interval);
    currentAction = reverse ? max : 1;
    fn(currentAction);

    if (!max || (!reverse && currentAction < max) || (reverse && currentAction > 0)) {
      interval = setInterval(function () {
        currentAction = reverse ? currentAction - 1 : currentAction + 1;
        fn(currentAction);

        if ((!reverse && max && currentAction === max) || (reverse && currentAction === 0)) {
          clearInterval(interval);
        }
      }, delay);
    }
  }

  function reset(destroy) {
    clearInterval(interval);
    sequence = [];
    sequence1 = [];
    clearInterval(interval2);
    time = null;

    if (destroy) {
      S.Shape.switchShape(S.ShapeBuilder.letter(''));
    }
    reset_inited = 1;
  }

$(window).on("scroll", function(e) {
   // console.log(getBodyScrollTop())

    if (reset_inited!=1 && init1==1 && getBodyScrollTop() >= $('#top_block').height() ){
      reset();
     // console.log('reset')
    } else if ( reset_inited==1 && init1==1 && getBodyScrollTop() < $('#top_block').height() ){
      performAction(xIcons);
      //console.log('noreset')
    }
    
  });
window.addEventListener('blur', function() {
  if (reset_inited!=1 && init1==1  ){
      reset();
     // console.log('reset')
    }
});
window.addEventListener('focus', function() {
  if ( reset_inited==1 && init1==1 && getBodyScrollTop() < $('#top_block').height() ){
      performAction(xIcons);
      //console.log('noreset')
    }
});

var reset_yes = 0;
var first_init = 1;

  function performAction(value) {
    reset_inited = 0;
    clearInterval(interval2);
    sequence1 = value.split('|');
    var action,
        current;

    //overlay.classList.remove('overlay--visible');
    sequence = typeof(value) === 'object' ? value : sequence.concat(value.split('|'));
   
    //var sequence_count = 3;
   
      var sequence_count = 3000000;
    //input.value = '';

    interval2 = setInterval(function () {
     /* timedAction(function () { */
        anim_interval(sequence);
        
    }, 4000);
    if (first_init==1){
      first_init = 0;
      anim_interval(sequence);
    }

  }



function anim_interval(sequence){
  current = sequence.shift();
      action = getAction(current);
      value = getValue(current);

      if (sequence.length==0){
        reset_yes = 1;
       //sequence = sequence.concat(sequence1); 
       //
       
       //console.log('da')
        
      }

 //console.log(sequence1)
      switch (action) {

      case 'icon':
     
        S.ShapeBuilder.imageFile( './img/'+value + '.svg', function (obj) {
          S.Shape.switchShape(obj);
          if (document.querySelectorAll('.top__title_text.active').length){
            document.querySelector('.top__title_text.active').classList.remove('active');
          }          
          document.querySelector('#'+value).classList.add('active');

          document.querySelector('#details-id').setAttribute('href',document.querySelector('#'+value).getAttribute('data-url'));
          
          
        });
        break;

      default:
        S.Shape.switchShape(S.ShapeBuilder.letter(current[0] === cmd ? 'What?' : current));
      }
      
      if (reset_yes==1){
        reset();
       
        performAction(xIcons);

        reset_yes = 0;
      }
      
    /* }, 5000, sequence_count); */
   
}

 

function bindEvents() {
    
}

  return {
    init: function () {
      bindEvents();
   

      if (isTouch) {
        document.body.classList.add('touch');
      }

      
    },

    simulate: function (action) {
     
      performAction(action);
    }
  };
}() );




S.Dot = function (x, y) {
  this.p = new S.Point({
    x: x,
    y: y,
    z: 5,
    a: 1,
    h: 0
  });

  this.e = 0.07;
  this.s = true;

  this.c = new S.Color(56, 96, 172, this.p.a);

  this.t = this.clone();
  this.q = [];
};

S.Dot.prototype = {
  clone: function () {
    return new S.Point({
      x: this.x,
      y: this.y,
      z: this.z,
      a: this.a,
      h: this.h
    });
  },

  _draw: function () {
    this.c.a = this.p.a;
    S.Drawing.drawCircle(this.p, this.c);
  },

  _moveTowards: function (n) {
    var details = this.distanceTo(n, true),
        dx = details[0],
        dy = details[1],
        d = details[2],
        e = this.e * d;

    if (this.p.h === -1) {
      this.p.x = n.x;
      this.p.y = n.y;
      return true;
    }

    if (d > 1) {
      this.p.x -= ((dx / d) * e);
      this.p.y -= ((dy / d) * e);
    } else {
      if (this.p.h > 0) {
        this.p.h--;
      } else {
        return true;
      }
    }

    return false;
  },

  _update: function () {
    var p,
        d;

    if (this._moveTowards(this.t)) {
      p = this.q.shift();

      if (p) {
        this.t.x = p.x || this.p.x;
        this.t.y = p.y || this.p.y;
        this.t.z = p.z || this.p.z;
        this.t.a = p.a || this.p.a;
        this.p.h = p.h || 0;
      } else {
        if (this.s) {
          this.p.x -= Math.sin(Math.random() * 3.142);
          this.p.y -= Math.sin(Math.random() * 3.142);
        } else {
          this.move(new S.Point({
            x: this.p.x + (Math.random() * 50) - 25,
            y: this.p.y + (Math.random() * 50) - 25,
          }));
        }
      }
    }

    d = this.p.a - this.t.a;
    this.p.a = Math.max(0.1, this.p.a - (d * 0.05));
    d = this.p.z - this.t.z;
    this.p.z = Math.max(1, this.p.z - (d * 0.05));
  },

  distanceTo: function (n, details) {
    var dx = this.p.x - n.x,
        dy = this.p.y - n.y,
        d = Math.sqrt(dx * dx + dy * dy);

    return details ? [dx, dy, d] : d;
  },

  move: function (p, avoidStatic) {
    if (!avoidStatic || (avoidStatic && this.distanceTo(p) > 1)) {
      this.q.push(p);
    }
  },

  render: function () {
    this._update();
    this._draw();
  }
};


S.ShapeBuilder = (function () {
  var gap = 13,
      shapeCanvas = document.createElement('canvas'),
      shapeContext = shapeCanvas.getContext('2d'),
      fontSize = 500,
      fontFamily = 'Avenir, Helvetica Neue, Helvetica, Arial, sans-serif';

  function fit() {
    shapeCanvas.width = Math.floor(window.innerWidth / gap) * gap;
    shapeCanvas.height = Math.floor(window.innerHeight / gap) * gap;
    shapeContext.fillStyle = 'red';
    shapeContext.textBaseline = 'middle';
    shapeContext.textAlign = 'center';
  }

  function processCanvas() {
    var pixels = shapeContext.getImageData(0, 0, shapeCanvas.width, shapeCanvas.height).data,
        dots = [],
        x = 0,
        y = 0,
        fx = shapeCanvas.width,
        fy = shapeCanvas.height,
        w = 0,
        h = 0;

    for (var p = 0; p < pixels.length; p += (4 * gap)) {
      if (pixels[p + 3] > 0) {
        dots.push(new S.Point({
          x: x,
          y: y
        }));

        w = x > w ? x : w;
        h = y > h ? y : h;
        fx = x < fx ? x : fx;
        fy = y < fy ? y : fy;
      }

      x += gap;

      if (x >= shapeCanvas.width) {
        x = 0;
        y += gap;
        p += gap * 4 * shapeCanvas.width;
      }
    }

    return { dots: dots, w: w + fx, h: h + fy };
  }

  function setFontSize(s) {
    shapeContext.font = 'bold ' + s + 'px ' + fontFamily;
  }

  function isNumber(n) {
    return !isNaN(parseFloat(n)) && isFinite(n);
  }

  return {
    init: function () {
      fit();
      window.addEventListener('resize', fit);
    },

    imageFile: function (url, callback) {
      var image = new Image(),
          a = S.Drawing.getArea();

      image.onload = function () {
        shapeContext.clearRect(0, 0, shapeCanvas.width, shapeCanvas.height);
        shapeContext.drawImage(this, 0, 0, a.h * 0.6, a.h * 0.6);
        callback(processCanvas());
      };

      image.onerror = function () {
        callback(S.ShapeBuilder.letter('What?'));
      };

      image.src = url;
    },

    circle: function (d) {
      var r = Math.max(0, d) / 2;
      shapeContext.clearRect(0, 0, shapeCanvas.width, shapeCanvas.height);
      shapeContext.beginPath();
      shapeContext.arc(r * gap, r * gap, r * gap, 0, 2 * Math.PI, false);
      shapeContext.fill();
      shapeContext.closePath();

      return processCanvas();
    },

    letter: function (l) {
      var s = 0;

      setFontSize(fontSize);
      s = Math.min(fontSize,
                  (shapeCanvas.width / shapeContext.measureText(l).width) * 0.8 * fontSize, 
                  (shapeCanvas.height / fontSize) * (isNumber(l) ? 1 : 0.45) * fontSize);
      setFontSize(s);

      shapeContext.clearRect(0, 0, shapeCanvas.width, shapeCanvas.height);
      shapeContext.fillText(l, shapeCanvas.width / 2, shapeCanvas.height / 2);

      return processCanvas();
    },

    rectangle: function (w, h) {
      var dots = [],
          width = gap * w,
          height = gap * h;

      for (var y = 0; y < height; y += gap) {
        for (var x = 0; x < width; x += gap) {
          dots.push(new S.Point({
            x: x,
            y: y,
          }));
        }
      }

      return { dots: dots, w: width, h: height };
    }
  };
}());





S.Shape = (function () {
  var dots = [],
      width = 0,
      height = 0,
      cx = 0,
      cy = 0;

  function compensate() {
    var a = S.Drawing.getArea();

    cx = a.w / 2 - width / 2;
    cy = a.h / 2 - height / 2;
  }

  return {
    shuffleIdle: function () {
      var a = S.Drawing.getArea();

      for (var d = 0; d < dots.length; d++) {
        if (!dots[d].s) {
          dots[d].move({
            x: Math.random() * a.w,
            y: Math.random() * a.h
          });
        }
      }
    },

    switchShape: function (n, fast) {
      var size,
          a = S.Drawing.getArea(),
          d = 0,
          i = 0;

      width = n.w;
      height = n.h;

      compensate();

      if (n.dots.length > dots.length) {
        size = n.dots.length - dots.length;
        for (d = 1; d <= size; d++) {
          dots.push(new S.Dot(a.w / 2, a.h / 2));
        }
      }

      d = 0;

      while (n.dots.length > 0) {
        i = Math.floor(Math.random() * n.dots.length);
        dots[d].e = fast ? 0.25 : (dots[d].s ? 0.14 : 0.11);

        if (dots[d].s) {
          dots[d].move(new S.Point({
            z: Math.random() * 20 + 10,
            a: Math.random(),
            h: 18
          }));
        } else {
          dots[d].move(new S.Point({
            z: Math.random() * 5 + 5,
            h: fast ? 18 : 30
          }));
        }

        dots[d].s = true;
        dots[d].move(new S.Point({
          x: n.dots[i].x + cx,
          y: n.dots[i].y + cy,
          a: 1,
          z: 5,
          h: 0
        }));

        n.dots = n.dots.slice(0, i).concat(n.dots.slice(i + 1));
        d++;
      }

      for (i = d; i < dots.length; i++) {
        if (dots[i].s) {
          dots[i].move(new S.Point({
            z: Math.random() * 20 + 10,
            a: Math.random(),
            h: 20
          }));

          dots[i].s = false;
          dots[i].e = 0.04;
          dots[i].move(new S.Point({ 
            x: Math.random() * a.w,
            y: Math.random() * a.h,
            a: 0.3, //.4
            z: Math.random() * 4,
            h: 0
          }));
        }
      }
    },

    render: function () {
      for (var d = 0; d < dots.length; d++) {
        dots[d].render();
      }
    }
  };




}()  );



} else {
  var swiper_mob_val;
  var swiper_mob_id;
  var swiper_mob = new Swiper('#top__mobslider', {
    slidesPerView: 1, 
    loop: true,
    speed:1000,
    spaceBetween: 0,
    effect: 'fade',
    fadeEffect: {
      crossFade: true
    },
    
    autoplay: {
         delay: 4000,
         disableOnInteraction:false
       },

    on: {
      slideChange: function () {
        if (swiper_mob && swiper_mob.activeIndex){
          swiper_mob_val = swiper_mob.activeIndex;
          swiper_mob_id =  $('#top__mobslider .swiper-slide').eq(swiper_mob_val).attr('data-id');
          if (document.querySelectorAll('.top__title_text.active').length){
            document.querySelector('.top__title_text.active').classList.remove('active');
          }
          document.querySelector('#'+swiper_mob_id).classList.add('active');
        }
          
          
      }
    }
  });



}


});