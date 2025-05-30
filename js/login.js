const clientButton = document.getElementsByClassName("client-btn")[0];
const adminButton = document.getElementsByClassName("admin-btn")[0];
const clientButton1 = document.getElementsByClassName("client-btn")[1];
const adminButton1 = document.getElementsByClassName("admin-btn")[1];

clientButton.addEventListener("click", () => {
  document.querySelector("form:nth-of-type(1)").classList.remove("hidden");
  document.querySelector("form:nth-of-type(2)").classList.add("hidden");
});

adminButton.addEventListener("click", () => {
  document.querySelector("form:nth-of-type(2)").classList.remove("hidden");
  document.querySelector("form:nth-of-type(1)").classList.add("hidden");
});
clientButton1.addEventListener("click", () => {
  document.querySelector("form:nth-of-type(1)").classList.remove("hidden");
  document.querySelector("form:nth-of-type(2)").classList.add("hidden");
});

adminButton1.addEventListener("click", () => {
  document.querySelector("form:nth-of-type(2)").classList.remove("hidden");
  document.querySelector("form:nth-of-type(1)").classList.add("hidden");
});
