<template>
	
</template>


<script>
	export default {
		created(){
			EvenBus.$emit('logout');
		}
	}
</script>

<style>

</style>