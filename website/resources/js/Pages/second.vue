<script setup>
defineProps({
    title: String,
    ingredients: String,
    instructions: String,
    image_name:String
});
</script>

<template>
    <p>
       {{title}}
    </p>
    <p>
       {{ingredients}}
    </p>
    <p>
       {{instructions}}
    </p>
    <img
        :src="image_name"
        alt="my image"
    />
</template>
