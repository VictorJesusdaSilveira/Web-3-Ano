<?php

print "<link rel="stylesheet" href="botaoImagem.css">"

function desenhaBotao($bandas , $timesCS , $selecoes){

    print "<div class='dropdown'>";
    print "<button class='dropbtn'>Bandas</button>";
    print "<div class='dropText'>";
    print "<span><img src='' width='20' height='20'>Slipknot</span>";
    print "<span><img src='link' width='20' height='20'>Deftones</span>";
    print "<span><img src='link1' width='20' height='20'>Linkin Park</span>";
    print "</div>";
    print "</div>";

}

$bandas = array{
    $banda1 = new Link("https://www.google.com/imgres?q=slipknot%20logo&imgurl=https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2F7%2F7a%2FSlipknot_%2528logo%2529_2.jpg&imgrefurl=https%3A%2F%2Fpt.wikipedia.org%2Fwiki%2FFicheiro%3ASlipknot_(logo)_2.jpg&docid=N3xfv_gsBt2XMM&tbnid=26aale8EPJ-TqM&vet=12ahUKEwj535PCpIaTAxW3lJUCHbD_PNEQnPAOegQIHBAB..i&w=1722&h=744&hcb=2&ved=2ahUKEwj535PCpIaTAxW3lJUCHbD_PNEQnPAOegQIHBAB" , "Slipknot");
    $banda2 = new Link("https://www.google.com/imgres?q=deftones%20logo&imgurl=https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2F7%2F7b%2FDeftones_%2528Logo%2529.png&imgrefurl=https%3A%2F%2Fpt.wikipedia.org%2Fwiki%2FFicheiro%3ADeftones_(Logo).png&docid=Rhzc1esKpjPW8M&tbnid=qaKa8o7utvUKSM&vet=12ahUKEwi_k9TIpIaTAxWBrZUCHcC_AjUQnPAOegQIHhAB..i&w=600&h=262&hcb=2&ved=2ahUKEwi_k9TIpIaTAxWBrZUCHcC_AjUQnPAOegQIHhAB" , "Deftones");
    $banda3 = new Link("https://www.google.com/imgres?q=linkin%20park%20logo&imgurl=https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2Fthumb%2F0%2F06%2FLinkin_Park_logo_2024.svg%2F960px-Linkin_Park_logo_2024.svg.png&imgrefurl=https%3A%2F%2Fpt.wikipedia.org%2Fwiki%2FFicheiro%3ALinkin_Park_logo_2024.svg&docid=3KVTfb6nL1sfJM&tbnid=fzlStkvAKLxP8M&vet=12ahUKEwihxcPNpIaTAxWWuJUCHf_hDH8QnPAOegQIGhAB..i&w=960&h=960&hcb=2&ved=2ahUKEwihxcPNpIaTAxWWuJUCHf_hDH8QnPAOegQIGhAB" , "Linkin Park");
}

$timesCS = array{
    $time1 = new Link("https://www.google.com/imgres?q=furia%20logo&imgurl=https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fpt%2Ff%2Ff9%2FFuria_Esports_logo.png&imgrefurl=https%3A%2F%2Fpt.wikipedia.org%2Fwiki%2FFicheiro%3AFuria_Esports_logo.png&docid=AyInFgcVH5A9sM&tbnid=XrwWxAOJi8PBMM&vet=12ahUKEwjq0p_RpIaTAxU2ppUCHSOYKQAQnPAOegQIGBAB..i&w=321&h=312&hcb=2&ved=2ahUKEwjq0p_RpIaTAxU2ppUCHSOYKQAQnPAOegQIGBAB" , "Fúria");
    $time2 = new Link("https://www.google.com/imgres?q=vitality%20logo&imgurl=https%3A%2F%2Fliquipedia.net%2Fcommons%2Fimages%2F5%2F55%2FTeam_Vitality_2021_allmode.png&imgrefurl=https%3A%2F%2Fliquipedia.net%2Frainbowsix%2FTeam_Vitality&docid=qmmd32v1_e2grM&tbnid=rGfgsnMraVtXpM&vet=12ahUKEwjFwoTVpIaTAxXbpZUCHbiDFOcQnPAOegQIFxAB..i&w=1000&h=1242&hcb=2&ved=2ahUKEwjFwoTVpIaTAxXbpZUCHbiDFOcQnPAOegQIFxAB" , "Vitality");
    $time3 = new Link("https://www.google.com/imgres?q=navi%20logo&imgurl=https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2Fe%2Fe0%2FNatus_Vincere_logo.png&imgrefurl=https%3A%2F%2Fpt.wikipedia.org%2Fwiki%2FFicheiro%3ANatus_Vincere_logo.png&docid=dACS-o0HvKXWWM&tbnid=iXwtDcNEzbargM&vet=12ahUKEwiz597apIaTAxUHs5UCHSe3LeQQnPAOegQIGRAB..i&w=600&h=533&hcb=2&ved=2ahUKEwiz597apIaTAxUHs5UCHSe3LeQQnPAOegQIGRAB" , "NAVI");
}


$selecoes = array{
    $selecao1 = new Link("https://www.google.com/imgres?q=brasil%20logo&imgurl=https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2Fthumb%2F9%2F99%2FBrazilian_Football_Confederation_logo.svg%2F960px-Brazilian_Football_Confederation_logo.svg.png&imgrefurl=https%3A%2F%2Fpt.wikipedia.org%2Fwiki%2FFicheiro%3ABrazilian_Football_Confederation_logo.svg&docid=GjVOPtHs8h52-M&tbnid=ZQrLoFaRG7rigM&vet=12ahUKEwiI7IfhpIaTAxVzpZUCHRYfEUwQnPAOegQIGRAB..i&w=960&h=1366&hcb=2&ved=2ahUKEwiI7IfhpIaTAxVzpZUCHRYfEUwQnPAOegQIGRAB" , "Brasil");
    $selecao2 = new Link("https://www.google.com/imgres?q=fran%C3%A7a%20logo&imgurl=https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fpt%2F2%2F25%2FLogo_Sele%25C3%25A7%25C3%25A3o_Francesa_2018.png&imgrefurl=https%3A%2F%2Fpt.wikipedia.org%2Fwiki%2FFicheiro%3ALogo_Sele%25C3%25A7%25C3%25A3o_Francesa_2018.png&docid=rvbiXNLBbK_zxM&tbnid=wSxSF9i635KVEM&vet=12ahUKEwjM-5nspIaTAxU6qpUCHRbaB5oQnPAOegQIGRAB..i&w=332&h=500&hcb=2&ved=2ahUKEwjM-5nspIaTAxU6qpUCHRbaB5oQnPAOegQIGRAB" , "França");
    $selecao3 = new Link("https://www.google.com/imgres?q=alemanha%20logo&imgurl=https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fpt%2Fa%2Fa9%2FDFBEagle.png&imgrefurl=https%3A%2F%2Fpt.wikipedia.org%2Fwiki%2FSele%25C3%25A7%25C3%25A3o_Alem%25C3%25A3_de_Futebol&docid=uq3xGnizEjMgNM&tbnid=1oSvqNLSKhyA4M&vet=12ahUKEwji1rjxpIaTAxUtrJUCHVKOLm4QnPAOegQIGhAB..i&w=300&h=369&hcb=2&ved=2ahUKEwji1rjxpIaTAxUtrJUCHVKOLm4QnPAOegQIGhAB" , "Alemanha");
}






?>
