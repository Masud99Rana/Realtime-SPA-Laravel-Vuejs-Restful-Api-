<template>
	
</template>


<script>
	export default {
		created(){
			EvenBus.$emit('logout');// this event will receive by Toolbar.vue
		}
	}
</script>

<style>

</style>