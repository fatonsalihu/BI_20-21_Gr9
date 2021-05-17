window.addEventListener('load' ,start,false);

function start (){
    var p = document.getElementById('login');

    if(window.sessionStorage.getItem('email')){
        p.innerHTML = `${window.sessionStorage.getItem('email')} | <span id="logout"> <a href="database/logout.php">Log Out</a></span> `;
        var logout = document.getElementById('logout');
        logout.style.cursor = 'pointer' ;
        logout.addEventListener('click', ()=>{
            location(database/logout.php);
        });
    }
}