<template>
	<div class="modal">
		<div class="close" @click="$emit('close')">
			<button class="close--btn">X</button>
		</div>
		<div class="modal__container">
			<slot></slot>
		</div>
	</div>
</template>

<script>
	export default {

	}
</script>

<style>
	.modal{
		position: fixed;
		background: rgba(0, 0, 0, 0.5);
		height: 100%;
		width: 100%;
		top: 0;
	}

	.modal__container{
		width: 50vw;
		min-width: 500px;
		margin-right: auto;
		margin-left: auto;
		display: flex;
		align-items: center;
		justify-content: center;
		margin-top: 25vh;
	}

	.form__input{
		width: 100%;
		box-sizing: border-box;
	}
	.ishalf{
		width: inherit;
	}
	.close{
		position: absolute;
		top: 1em;
		right:1em;
	}
	.close--btn{
		background: rgba(0, 0, 0, 0);
		border: none;
		color: white;
		font-size: 1em;
	}
</style>