<template>
	<div class="">
		<reply 
		v-for="(reply,index) in content" 
		:key="reply.id"
		:index=index
		v-if="question.replies" 
		:data="reply"
		><div class=""><h1>Hell</h1></div></reply>
		
	</div>
</template>

<script>

import Reply from './reply'

	export default {
		props: ["question"],

		data(){
			return{
				content: this.question.replies
			}
		},
		components: {Reply},

		created(){
			this.listen()
		},

		methods:{
			listen(){
				EvenBus.$on('newReply',(reply) =>{
					this.content.unshift(reply)
				})

				EvenBus.$on('deleteReply',(index) =>{
					axios.delete(`/api/question/${this.question.slug}/reply/${this.content[index].id}`)
					.then(res=>{
						this.content.splice(index,1)
					})
						
				})
			}
		}
	}
</script>

<style>

</style>