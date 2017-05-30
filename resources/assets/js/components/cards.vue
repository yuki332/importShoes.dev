<template>
    <div class="card">
        <slot></slot>
        <h3>{{ item }}</h3>
        <p>Price: ${{ price }}</p>
        <div class="text--right">
            <button class="btn card__btn" @click="order">Order</button>
        </div>
    </div>
</template>

<script>
    export default {
        props:['item', 'price'],
        methods:{
            order(){
                alert(this.item + ' is clicked');
            }
        }
    }
</script>
