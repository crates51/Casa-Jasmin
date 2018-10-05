<template>
	<div>
		<facilities></facilities>
	</div>
</template>

<script>
import Facilities from './components/Facilities.vue';
 
 export default {
  components:{
    'facilities':Facilities
  },
  data(){
  	return{
  		title:"Ninja App"
  	}
  }
 }
</script>

