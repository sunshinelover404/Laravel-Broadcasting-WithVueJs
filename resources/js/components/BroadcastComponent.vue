<template>
  <div>
    <h1>Welcome to the broadcasting</h1>
    <h3>{{ message }}</h3>
  </div>
</template>

<script>
export default {
  data() {
    return {
      message: ''
    };
  },
  created() {
    Echo.channel('my-channel').listen('My', (e) => {
      alert('This is done by refresh');
      console.log(e.message);
      this.message = e.message;
    });
  }
};
</script>
