import { reactive } from "vue";

export const store = reactive({
  TodoList: [],
  apiURL: "http://localhost/php-todo-list-json/Back/",
  searchText: "",
});
