<template>
    <div class="facilities" >
       <span v-on:mouseover="popup(true,thClassValue('flatTv',id),'pop_upF')" v-on:mouseleave="popup(false,thClassValue('flatTv',id),'pop_upF')" v-bind:id="thClassValue('flatTv',id)">
            <div class="pop_upF">
              Avem televizoare! :D
            </div>
            <img v-bind:src="FTv_image_url" alt=" " class="img-fluid">
            TV cu ecran plat
       </span>
       <span v-on:mouseover="popup(true,thClassValue('Minibar',id),'pop_upM')" v-on:mouseleave="popup(false,thClassValue('Minibar',id),'pop_upM')" v-bind:id="thClassValue('Minibar',id)">
            <div class="pop_upM" >
              Minibarul iti va fii alaturi pentru orice moment
            </div>
            <img v-bind:src="Mb_image_url" alt=" " class="img-fluid">
            Minibar
       </span>
       <span v-on:mouseover="popup(true,thClassValue('Shower',id),'pop_upS')" v-on:mouseleave="popup(false,thClassValue('Shower',id),'pop_upS')" v-bind:id="thClassValue('Shower',id)">
            <div class="pop_upS">
                Băi proaspăt amenajate vă vor sta la dispoziție
            </div>
            <img v-bind:src="Ps_image_url" alt=" " class="img-fluid">
            Baie privată
       </span>
       <span v-on:mouseover="popup(true,thClassValue('seaView',id),'pop_upSV')" v-on:mouseleave="popup(false,thClassValue('seaView',id),'pop_upSV')" v-bind:id="thClassValue('seaView',id)">
            <div class="pop_upSV" >
              Vederea la mare si aerul din tabara te vor revigora
            </div>
            <img v-bind:src="Sv_image_url" alt=" " class="img-fluid">
            Balcon,Vedere la mare
      </span>
       <span v-on:mouseover="popup(true,thClassValue('Wifi',id),'pop_upW')" v-on:mouseleave="popup(false,thClassValue('Wifi',id),'pop_upW')" v-bind:id="thClassValue('Wifi',id)">
            <div class="pop_upW">
              WiFi gratuit de putere inalta iti va fii alaturi
            </div>
            <img v-bind:src="Wf_image_url" alt=" " class="img-fluid">
            WiFi gratuit inclus
       </span>
       <span v-show="showTerrace" v-on:mouseover="popup(true,thClassValue('Terrace',id),'pop_upT')" v-on:mouseleave="popup(false,thClassValue('Terrace',id),'pop_upT')" style="color:#d29914" v-bind:id="thClassValue('Terrace',id)">
            <div class="pop_upT">
              O terasa spatioasa, iti va oferi posibilitatea sa intreprinzi orice activitate in aer liber
            </div>
            <img v-bind:src="T_image_url" alt=" " class="img-fluid">
            Terasă,Vedere la mare
       </span>
   </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        props:{
          showTerrace:{
            type: Boolean,
            default: false
          },
          id:{
            type:Number,
            default:0
          }
        },
        data:function(){
            return {
                name: 'Yoshi!',
                FTv_image_url:'imgs/icons/flatTv_facility.png',
                Mb_image_url:'imgs/icons/minibar_facility.png',
                Ps_image_url:'imgs/icons/privateShower_facility.png',
                Sv_image_url:'imgs/icons/seaView_facility.png',
                Wf_image_url:'imgs/icons/wifi_facility.png',  
                T_image_url:'imgs/icons/terrace_facility.png',  
                // show: false
            }
        },
        methods:{
            changeName: function(){
                this.name="Vlad";
            },
            popup: function(show,ref,onpopup){
              if(this.id==1){
                console.log(this.id);
                            // var popup=$('.'+onpopup);
                            if(show){
                              $('.'+onpopup).fadeIn(300);
                              // popup.show();
                              var popper = new Popper($('#'+ref), $('.'+onpopup), {
                                  placement: 'top'
                               });
                            }
                            else $('.'+onpopup).fadeOut(300);
              }
            },
            thClassValue: function (idName,id) {
            return idName+'_'+id;
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

.facilities{
      color:color(green_facilities);
      font-weight: bold;
      font-size:85%;
      line-height: 26px;
      margin: 0 10px 15px 0;
      img{
        width: 20px;
        height: 20px;
      }

      span{
        padding-right: 8px;
      }
    }

    .facilities > *{
      display: inline-block;
      cursor: default;
    }

    .pop_upF,.pop_upM,.pop_upS,.pop_upSV,.pop_upW,.pop_upT{
      color:white;
      display:none;
       
      background: color(purple_primary);
      border-radius: 3px;
      padding: 5px 10px;

      max-width: 350px;
    }
</style>



