<script>
//importo libreria axios
import axios from "axios";

//importo store
import { store } from "./store";

export default {
  data() {
    return {
      store,
    };
  },

  methods: {
    getCards() {
      let myURL = store.apiURL;

      console.log(myURL);

      //prima chiamata axios
      axios
        .get(myURL)
        .then((res) => {
          store.TodoList = res.data;
          console.log(store.TodoList);
        })
        .catch((err) => {
          console.log("Errori", err);
        });
    },
  },

  created() {
    this.getCards();
  },
};
</script>

<template>
  <header class="container">
    <div class="row">
      <div class="col">
        <h1>Lista Cose da fare</h1>
      </div>
    </div>
  </header>

  <main class="container">
    <ul>
      <li v-for="(item, i) in store.TodoList">
        {{ item }}
      </li>
    </ul>
  </main>
</template>

<style lang="scss">
@use "./styles/partials/variables" as *;
@use "./styles/general.scss" as *;

.row {
  margin-top: 50px;
  text-align: center;

  .col {
    h1 {
      color: $color;
    }
  }
}

main {
  text-align: center;
  ul {
    margin-top: 50px;
    list-style-type: none;

    li {
      color: $color1;
      font-weight: bold;
    }
  }
}
</style>
