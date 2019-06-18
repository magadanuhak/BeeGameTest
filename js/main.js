document.addEventListener("DOMContentLoaded", function () {
   let query = new QueryProcessor();
   document.querySelector(".hitBee").addEventListener("click", function () {
   let gameArea = document.querySelector(".gameArea");
   let results = query.getGameResults();
   if(results == "error"){
      gameArea.innerHTML = `<div class="alert ">Error in getting game data</div>`;
   } else{
      let ul = document.createElement('ul');
      ul.classList.add("bees","list");

      gameArea.innerHTML ="";
      console.log(results);
      gameArea.insertAdjacentElement("afterbegin", ul);

   }
   })
});