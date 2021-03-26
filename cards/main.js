
const renderItem = (commit, numBlocks, i) => {
    colorType = commit.type === 'SupportAvailable' ? 'orange' : 'blue';
    classBlock = numBlocks > 5 ? 'none' : '';
    return `<div class='mainContent__block ${classBlock}'>
        <a href='/details/${ i }'>
            <div class='mainContent__block-img'>
                <img 
                    class='mainContent__block-img' 
                    src='images/img${ i + 1 }.png' 
                    alt='img${ i + 1 }'
                >
                    <span class='mainContent__block-type ${ colorType }'>
                        ${ commit.type }
                    </span>
                </div>
                <div class='mainContent__block_content'>
                    <p class='mainContent__block_content-title'>
                        ${ commit.title }
                    </p>
                    <p class='mainContent__block_content-address'>
                        ${ commit.address }
                    </p>
                    <p class='mainContent__block_content-sale'>
                        New Properties for Sale from <span>£214,999<span>
                    </p>
                    <p class='mainContent__block_content-lastText'>Shared Ownership Available</p>
                </p>
            </div>
        </a>
    </div>`
    
}

(async () => {
    

async function json() {
    
    let url = 'https://603e38c548171b0017b2ecf7.mockapi.io/homes';
    let response = await fetch(url);
  
    let commits = await response.json(); // читаем ответ в формате JSON
    var results = [];
    var searchField = "title";
    var searchVal = 'SMS';
    for (var i=0 ; i <commits.length ; i++)
    {    
        if (commits[i][searchField] == searchVal) {
            results.push(commits[i]);
            console.log(results[0]);
        }
    }
         
    let blocks = '';
    for(let i=0; i<commits.length; i++) {
        numBlocks = document.querySelectorAll('.mainContent__block').length;
        
        blocks += renderItem(commits[i],numBlocks, i);
        document.querySelector('.mainContent').innerHTML = blocks;

    }

    document.getElementById('search').onkeyup = function() {
        document.querySelector('.mainContent').innerHTML = '';
        let searchText = this.value.toLowerCase();
        let stringLength = searchText.length;
        btn = document.querySelector('.btn');
        btn.style.display = 'none';
        if (stringLength > 2) {
          for (let i = 0; i < commits.length; i++) {
                let title = commits[i].title.split('').slice(0, stringLength).join('').toLowerCase();
                if (commits[i].title.toLowerCase().includes(searchText.toLowerCase())) {
                    numBlocks = document.querySelectorAll('.mainContent__block').length;
                document.querySelector('.mainContent').innerHTML += renderItem(commits[i],numBlocks, i);
                
                }
            }
        } else {
            document.querySelector('.mainContent').innerHTML = blocks;
            btn = document.querySelector('.btn');
            btn.style.display = 'flex';
          }
            
        }

      
  }
  
  await json();

  var canvas = document.getElementById('canvas-1');
    var ctx = canvas.getContext('2d');
    ctx.lineWidth = 2;
    ctx.strokeStyle = '#000';
    ctx.beginPath();
    ctx.moveTo(0, 4);
    ctx.lineTo(4, 11);
    ctx.lineTo(0, 18);
    ctx.stroke();
})();  

 



