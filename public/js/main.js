Vue.component('temp', {
  data: function () {
    return {
      heading: "Laravel-VueJS",
      desc: "this is a project idea"
    }
  },
  template: `
      <div>
	  	  <h1 class="title m-b-md">{{ heading }}</h1>
        <p> {{ desc }} </p>
      </div>
  	`
});


Vue.component('navbar', {
  data: function() {
    return {
      desc: "test"
    }
  },
  template: `
    <nav>
      <ul>
        <li>{{ desc }}</li>
        <li>{{ desc }}</li>
        <li>{{ desc }}</li>
        <li>{{ desc }}</li>
      </ul>
    </nav>
  `
});

const app = new Vue({
  el: "#app"
});
