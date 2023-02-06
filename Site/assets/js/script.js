let ongletTags = document.getElementById('tags-tab');
let ongletUtilisateurs = document.getElementById('utilisateurs-tab');

let contentTags = document.getElementById('tags');
console.log(contentTags);
let contentUtilisateurs = document.getElementById('utilisateurs');

ongletTags.addEventListener('click', function(){
    ongletTags.classList.add('active');
    ongletUtilisateurs.classList.remove('active');
    //Affiche le contenu des tags
    contentUtilisateurs.classList.remove('show', 'active');
    contentTags.classList.add('show','active');
})

ongletUtilisateurs.addEventListener('click', function(){
    ongletTags.classList.remove('active');
    ongletUtilisateurs.classList.add('active');
    //Affiche le contenu des utilisateurs
    contentTags.classList.remove('show','active');
    contentUtilisateurs.classList.add('show','active');
})

