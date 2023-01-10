// async function getNews(){
//     await fetch('https://newsapi.org/v2/top-headlines?country=pt&apiKey=f3b6a39ac5a54486bcb8750ec85243dc')
//     .then(d => d.json())
//     .then(response => {
//         console.log(response.results);
//         for(var i = 0; i < response.results.length; i++){
//             const output = document.getElementById('output');
            
//             try{
//                 output.innerHTML += `
//                     <div class="card">
//                     <div class="card-body">
//                     <imgNoticias src="${response.results[i]['media'][0]['media-metadata'][2].url}" class="card-img-top" alt="${response.results[i]['media'][0].caption}" title="${response.results[i]['media'][0].caption}"><br>
//                     <h2 class="card-title">${response.results[i].title}</h2>
//                     <div class="card-text">
//                         <p>${response.results[i].abstract}</p>
//                     </div>
//                     </div>
//                     </div>
//                     <br>
//                     `
//                 console.log(response.results[i]['media'][0].caption);
//             }
//             catch(err){
//                 console.log(err);
//             }
//             // console.log(response.results[i].title);
//             // console.log(i);
//         }
//         document.getElementById('copyright').innerHTML = response.copyright;
//     })
// }
// getNews();


