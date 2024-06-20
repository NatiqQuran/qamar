/**
 * @param {MouseEvent} e
 */
const copy = (e) => {
  navigator.clipboard.writeText(e.target.innerText);

  e.target.classList.add("qCopied");

  setTimeout(() => e.target.classList.remove("qCopied"), 1000);
};

document
  .querySelectorAll(".qClickToCopyText")
  .forEach((el) => el.addEventListener("click", copy));
