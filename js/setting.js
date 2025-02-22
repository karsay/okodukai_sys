function show(color, shape, opacity, shapeSpeed, direction, anim, size, line){

  particlesJS('particles-js',
  {
    "particles": {
      //シェイプ数
      "number": {
        //要素内に表示するシェイプの数
        "value": 20,
        "density": {
          //シェイプ表示間隔設定
          "enable": true,
          //シェイプ表示間隔指定
          "value_area": 800
        }
      },
      //シェイプ色
      "color": {
        // "value": "#f39800"
        "value": color
      },

      //シェイプの設定
      "shape": {
        //シェイプ形
        "type": shape, //circle, edge, triangle, polygon, star, image 複数指定["circle", "triangle", "image"]

        //シェイプボーダー設定
        "stroke": {
          //ボーダー幅
          "width": 0,
          //ボーダー色
          "color": "#000000"
        },
        //シェイプの形でpolygonを指定した場合
        "polygon": {
          //ポリゴン角数指定
          "nb_sides": 6
        },

        //シェイプの形でimageを指定した場合
        "image": {
          //画像パス
          "src": "../images/momizi.png",
          //画像幅
          "width": 100,
          //画像高
          "height": 100
        }
      },

      //シェイプ透過率指定
      "opacity": {
        //透過率指定
        "value": opacity,
        //ランダム設定
        "random": false, //true:有効, false:無効

        //透過アニメーション設定
        "anim": {
          //アニメーション設定
          "enable": anim, //true:有効, false:無効
          //アニメーション速度
          "speed": 10,
          //アニメーション最小透過率
          "opacity_min": 0.1,
          //アニメーション同期
          "sync": false //true:有効, false:無効
        }
      },

      //シェイプサイズ
      "size": {
        //シェイプサイズ指定
        "value": size,
        //ランダムサイズ
        "random": true, //true:有効, false:無効
        //サイズアニメーション設定
        "anim": {
          //アニメーション設定
          "enable": true, //true:有効, false:無効
          //アニメーション速度
          "speed": 5,
          //アニメーション最小サイズ,
          "size_min": 5,
          //アニメーション同期設定
          "sync": true //true:有効, false:無効
        }
      },

      //シェイプを線で繋ぐか
      "line_linked": {
        //線の設定
        "enable": line, //true:有効, false:無効
        //線の間隔
        "distance": 150,
        //線の色
        "color": "#ffffff",
        //線の透過率
        "opacity": 0.1,
        //線の幅
        "width": 3
      },
      //シェイプの動きの設定
      "move": {
        //動きを制御するか
        "enable": true, //true:有効, false:無効
        //動く速度
        "speed": shapeSpeed,
        //動く方向
        "direction": direction, //none, top, top-right, right, bottom-right, bottom, bottom-left, left, top-left
        //ランダム設定
        "random": true, //true:有効, false:無効
        //静止状態にする
        "straight": false, //true:有効, false:無効
        //シェイプの動き
        "out_mode": "out", //ボックス内で動かす bounce ボックス外に逃がす out
        "attract": {
          "enable": true,
          "rotateX": 1000,
          "rotateY": 1000
        }
      }
    },
    "interactivity": {
      "detect_on": "canvas",

      //マウスイベント設定
      "events": {
        //マウスオーバー時の処理
        "onhover": {
          "enable": false, //true:有効, false:無効
          "mode": "grad" //grad:付近のシェイプと線を繋ぐ, bubble:拡大, repulse:拒絶
        },

        //クリック時の処理処理
        "onclick": {
          //クリック時の処理
          "enable": false, //true:有効, false:無効
          //クリック時の処理
          "mode": "repulse" //push:追加, remove:削除, bubble:拡大, repulse:拒絶
        },
        "resize": true
      },
      //以下でマウスイベント発生時の詳細値を設定
      "modes": {
        "grab": {
          "distance": 300,
          "line_linked": {
            "opacity": 1
          }
        },
        "bubble": {
          "distance": 100,
          "size": 7.5,
          "duration": 2,
          "opacity": 8,
          "speed": 3
        },
        "repulse": {
          "distance": 1
        },
        "push": {
          "particles_nb": 4
        },
        "remove": {
          "particles_nb": 2
        }
      }
    },
    //Retina Display対応
    "retina_detect": true, //true:有効, false:無効
    }
  );
}

var tmp = 5;

function slide() {
  // console.log("tmp:",tmp)
  var random = Math.floor( Math.random() * 4);
  // if(random == tmp) {
  //   random+=1;
  //   // console.log("aaa");
  //   if(random == 5){
  //     random = 0;
  //   }
  // }
  // var random = 0;
  // show("#f09199", "polygon", 0.8, "bottom");
  // alert(random)
  console.log(random);
  switch(random) {
    case 0:
      // 春
      show("#f09199", "polygon", 0.8, 10, "bottom", true, 5 ,false);
      $(function(){
        // jsのパスがうまく通らない場合は下のコメントアウトを外して上のをコメントアウト
        $('#login-wrap').css('background-image', "url(../okodukai_sys/images/haru.jpg)");
        // $('#login-wrap').css('background-image', "url(../images/haru.jpg)");
      });
      break;
    case 1:
      // 夏
      show(["#ff7fbf", "#ff7fff", "#bf7fff"], "polygon", 0.2, 10,"none",false, 10, true);
      $(function(){
                // jsのパスがうまく通らない場合は下のコメントアウトを外して上のをコメントアウト
        $('#login-wrap').css('background-image', "url(../okodukai_sys/images/natu4.jpg)");
        // $('#login-wrap').css('background-image', "url(../images/haru.jpg)");
      });
      break;
    case 2:
      // 秋
      show('f39800', "circle", 0.3, 5, "top", false, 5, false);
      $(function(){
                // jsのパスがうまく通らない場合は下のコメントアウトを外して上のをコメントアウト
        $('#login-wrap').css('background-image', "url(../okodukai_sys/images/login.jpg)");
        // $('#login-wrap').css('background-image', "url(../images/haru.jpg)");
      });
      break;
    case 3:
      // 冬
      show("#ffffff", "circle", 0.5, 3, "bottom" , false, 5, false);
      $(function(){
                // jsのパスがうまく通らない場合は下のコメントアウトを外して上のをコメントアウト
        $('#login-wrap').css('background-image', "url(../okodukai_sys/images/huyu.jpg)");
        // $('#login-wrap').css('background-image', "url(../images/haru.jpg)");
      });
      break;
  }
  // var tmp = random;
  // console.log("tmp:",tmp);
  // setTimeout(slide.bind(this, tmp),30000);
}

slide();


