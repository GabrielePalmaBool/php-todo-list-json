import { reactive } from "vue";

export const store = reactive({
  TodoList: [],
  apiURL: "http://localhost:80/php-todo-list-json/Back/",
  searchText: "",
});
