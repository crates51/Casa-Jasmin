<template>
    <div class="col-md-6 col-xs-6 room-item">
      {{thumbnailAnimation()}} 
                    <div class="overlay">
                        <a href="#">
                            <h1>{{title}}</h1>
                        </a>
                        
                        <div class="desc">
                           <div>{{description}}</div>  
                           <div class="price">{{price}} lei<span>/Ziua</span></div>
                           <facilities v-bind:show-terrace="showTerrace" v-bind:id="id"></facilities>
                           <div class="row nav-row justify-content-end">
                                <a class="btn-info btn-sm">Mai multe detalii</a>
                           </div>
                           <div class="row nav-row justify-content-center">
                                <a class="btn-success btn-lg" id="button_CazareStandard">Cazare!</a>
                           </div>
                        </div>
                    </div>
                    <img v-bind:src="thClassValue(id)" alt=" " class="img-fluid">
                </div>
</template>

<script>
import Facilities from './Facilities.vue';
 
 export default {
  components:{
    'facilities':Facilities
  },
  props:{
    title:{
      type: String,
      default: "Error: No title Proped"
    },
    description:{
      type: String,
      default: "Error: No description Proped"
    },
    price:{
      type: Number,
      default: "Error: No price Proped"
    },
    showTerrace:{
      type: Boolean,
      default: false
    },
    id:{
      type:Number,
      default:0
    }
  },
  data(){
    return{
    }
  },
  methods:{
      thumbnailAnimation:function(){
        $( document ).ready(function() {
          jQuery(".room-item .desc").fadeTo(0, 0);
          $.easing.easeOutCubic = function (x, t, b, c, d) {
              return c*((t=t/d-1)*t*t + 1) + b;
          }
          jQuery(".room-item").on("mouseenter", function() {
                  var speed = 700;
             jQuery(this).find(".desc").stop(true).animate({
                      'height': "100%",
                      'margin-top': "20px",
                      "opacity": "100"
                  }, speed, 'easeOutCubic');
                  jQuery(this).find(".overlay").stop(true).animate({
                      'height': "100%",
                      'margin-top': "20px"
                  }, speed, 'easeOutCubic');
                  jQuery(this).parent().parent().find(".item").not(this).stop(true).fadeTo(speed, 1);
              }).on("mouseleave", function() {
                  var speed = 700;
                  jQuery(this).find(".desc").stop(true).animate({
                      'height': "0px",
                      'margin-top': "0px",
                      "opacity": "0"
                  }, speed, 'easeOutCubic');
                  jQuery(this).find(".overlay").stop(true).animate({
                      'height': "84px",
                      'margin-top': "20px"
                  }, speed, 'easeOutCubic');
              })
        });
      },
       thClassValue: function (id) {
        return "imgs/forMainThumbnails/thumbnail-"+id+".jpeg"
      }
  }
 }
</script>


<style scoped lang="scss">
  $colors:(
      purple_primary:#565978,
      purple_accent:#8b8ca1,
      red_caption:#d22954,
      purple_caption:#2e3579,
      purple_desc:#63687b,
      green_facilities:#0ab21b,
      green_popup:#829356
    );

@function color($color-name){
  @return map-get($colors,$color-name)
};

.row .room-item{
  .overlay{
        overflow: hidden;
        height: 84px;
        position: absolute;
        bottom: 0;
        background: #edb83a;
        padding: 35px 30px 20px;
        width: 100%;
        height: 84px;
        text-align: center;
  }

 h1 {
    color: #333;
    font-family: "Cinzel";
    text-transform: uppercase;
    padding: 0;
    margin: 0;
    font-size: 16px;
    letter-spacing: 3px;
    position: relative;
    overflow: hidden!important;

  }
  a:hover{
   color:#8c8c8c;
  }
  
  .desc {
    height: 0;
    color: #333;
    padding-left: 30px;
    padding-right: 30px;
    font-size: 110%;
  }
  .price {
      font-size: 32px;
      color:color(red_caption);
      font-family: "Cinzel";
      margin: 30px 0;
   }
  .btn-success,.btn-info{
    cursor: pointer
   }
}
.room-item:nth-child(odd) .overlay{
   background: #d6d6d6;
   border-bottom: solid 5px #63687b;
}

.room-item:nth-child(even) .overlay{
   background: #e5e5e5;
   border-bottom: solid 5px #d1b069;
}
</style>

