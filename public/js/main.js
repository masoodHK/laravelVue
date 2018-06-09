Vue.component('temp', {
  data: function () {
    return {
      count: 0,
      heading: "Laravel-Vue"
    }
  },
  template: `
  	<div>
	  	<h1 class="title m-b-md">{{ heading }}</h1>
	  	<button v-on:click="count++">You clicked me {{ count }} times.</button>

	</div>
  	`
})
new Vue({
	el: "#app"
});
