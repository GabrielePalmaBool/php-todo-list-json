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

      //Se è stato selezionato qualcosa dal selettore
      if (store.searchText !== "") {
        myURL = `https://db.ygoprodeck.com/api/v7/cardinfo.php?${store.Arc}=${store.searchText}`;
      }

      console.log(myURL);
      //prima chiamata axios
      axios
        .get(myURL)
        .then((res) => {
          store.TodoList = res.data.data;
          console.log(store.CardList);
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

<template></template>

<style lang="scss">
@use "./styles/general.scss";
</style>
