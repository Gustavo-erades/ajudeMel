# Ajude a Mel 
Mel é minha cachorrinha de estimação. Ela tem apenas seis meses `(01/2024)` e gosta muito de morder, correr e brincar. Essa página web é acessada por meio de um QrCode gerado de forma gratuita em um site da internet para <a href="https://qrcodefacil.com/">geração de QrCode de forma gratuita<a>, esse QrCode fica na coleira dela e serve para ser usado caso ela se perca algum dia.

## Sobre a página
É uma página simples. Possui um único html com informações de contato (para aquele(a) que leu o QrCode), contém link para enviar email `<a target="_blank" href="mailto:meuemail@gmail.com?subject=Achei a mel">`, link para enviar uma mensagem personalizada para o whatsapp, gerado de forma gratuita na internet em um site para <a href="https://zap.convertte.com.br/gerador-link-whatsapp/">geração de links para o whatsapp<a>, link para fazer uma ligação `<a href="tel:+5561999999999">` e um contador de acessos. 
<hr>
O contador de acessos, além de obviamente contar a quantidade de acessos à página, também armazena algumas informaçoes como ip, navegador e dia/hora do acesso, assim posso analisar se alguém acessou a página e quando aproximadamente foi feito esse acesso. Para maior precisão dessas informações foi utilizada uma API que usa o IP de acesso para registrar dados referentes a localização bem como o horário e data do acesso.
<hr>
Ao inves de ser usada a função `NOW()` do SQL foi usada o próprio PHP para capturar o dia e horário do acesso. Assim apenas os dados em tempo real são armazenados o que não aconteceria com o uso da função nativa do SQL, pois nesse caso a data e hora armazenadas seriam referentes ao momento em que o servidor fez o registro e, por conta de fuso horário e localidade do servidor, poderia causar certas incongruências. Ainda tentando evitar problemas, além de cidade, região e pais são armazenadas a latitude e longitude do IP no momento do acesso, isso é feito para que as informações possam ser cruzadas e analisadas com maior precisão posteriormente, caso seja necessário. 
## Tecnologias usadas
![HTML](https://img.shields.io/badge/HTML-151515?style=for-the-badge&logo=html5&logoColor=white)&nbsp;
![CSS](https://img.shields.io/badge/CSS-151515?style=for-the-badge&logo=css3&logoColor=white)&nbsp;
![PHP](https://img.shields.io/badge/PHP-151515?style=for-the-badge&logo=php&logoColor=white)&nbsp;
![MySql](https://img.shields.io/badge/MySql-151515?style=for-the-badge&logo=mysqli&logoColor=white)&nbsp;<br>
Além dessas linguagens, a IDE utilizada foi o VsCode, o SGB usado na implementação foi o MySql Workbench e o Xampp foi utilizado durante o desenvolvimento. A hospedagem foi feita de forma gratuita na <a href="https://br.000webhost.com/">00WebHost</a> e o SGB usado na hospedagem foi o PHPMyAdmin.
<br>
A API para capturar informações de localidade foi a <a href="https://ipinfo.io/">ipinfo.io</a>

## Código QrCode
<img src="https://github.com/Gustavo-erades/ajudeMel/assets/108373134/0728ac84-389a-450b-bb0a-f67c19f0e876" width="250px">
<img src="https://github.com/Gustavo-erades/ajudeMel/assets/108373134/31385b84-ffca-44ef-bb8e-ebea9e893635" width="190px">
<img src="https://github.com/Gustavo-erades/ajudeMel/assets/108373134/591354b4-c79d-4d54-86b9-ff793a3f9df9" width="190px">

## Página web
![fg](https://github.com/Gustavo-erades/ajudeMel/assets/108373134/88834d94-e132-43ca-927e-7d84f8ce50f9)

