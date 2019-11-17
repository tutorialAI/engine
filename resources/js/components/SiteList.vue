<template>
	<div>site list</div>
</template>
<script>
	import axios from 'axios'
	export default{

		mounted(){
			axios.get('/api/sites').then((result) => console.log(result));
		}
	}
</script>