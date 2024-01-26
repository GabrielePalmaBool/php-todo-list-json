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
    //Funzione per ottenere l'intera lista iniziale metodo (get)
    getList() {
      let myURL = store.apiURL;

      console.log(myURL);

      //prima chiamata axios get
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

    //Funzione per cambiare lo stato di un item della lista metodo (post)
    changeStatus(i) {
      let myURL = store.apiURL1;

      const data = {
        index: i,
      };

      const config = {
        headers: { "Content-Type": "multipart/form-data" },
      };

      //prima chiamata axios post
      axios
        .post(myURL, data, config)
        .then((res) => {
          store.TodoList = res.data;
          console.log(store.TodoList);
        })

        .catch((err) => {
          console.log("Errori", err);
        });
    },

    //Funzione per aggiungere un nuvo task alla lista metodo (post)
    pushTask() {
      console.log("PushTask:" + store.insTask);

      let myURL = store.apiURL2;

      const data = {
        value: store.insTask,
      };

      const config = {
        headers: { "Content-Type": "multipart/form-data" },
      };

      //prima chiamata axios post
      axios
        .post(myURL, data, config)
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
    this.getList();
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
      <li
        v-for="(item, i) in store.TodoList"
        :class="item.status ? 'complete' : 'no_complete'"
        @click="changeStatus(i)"
      >
        <del v-if="item.status == true"
          ><p>{{ item.task }}</p></del
        >
        <p v-else>{{ item.task }}</p>
      </li>
    </ul>
    <div class="row">
      <div class="col-auto">
        <input
          type="text"
          class="form-control"
          placeholder="Inserisci nuovo task."
          v-model.trim="store.insTask"
          @keyup.enter="pushTask()"
        />
      </div>

      <div class="col-auto">
        <button
          type="submit"
          class="btn btn-primary mb-2"
          @click.prevent="pushTask()"
        >
          Inserisci
        </button>
      </div>
    </div>
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

    .complete {
      color: green;
    }
    .no_complete {
      color: rgb(4, 0, 255);
    }
  }
  .row {
    justify-content: center;
    .form-control {
      display: inline-block;
    }

    .btn {
      display: inline-block;
      color: $color2;
    }

    .btn:hover {
      color: $color1;
    }
  }
}
</style>
