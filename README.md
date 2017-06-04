# SketchwareSQL
API Sketchware SQL

Text available in Portuguese and English.
Texto disponível em português e inglês.

English

Created by Leivison Dias with the help of Marcos Vinicius.

It is an online database API originally developed for Sketchware, but it is for any environment that can process the text contained in a URL.
It is designed to implement write and retrieve data in development environments that do not have native database connection capability. The API was developed in PHP and SQL, and uses pre-built URLs following specific rules for delivering and retrieving data.

* To install fill the config.php file with the data of your MySQL database,
* Transfer the files to your host,
* run the install.php file,
* Wait for the message "If you are reading this text, it is because the installation was successful!",
* If it appears your API is set up and ready to use.

To save data use the url below replacing "yourkey" with the data key and "yourvalue" by the value of the given.
http://yourhost.com/setdata.php?key=yourkey&value=yourvalue 
the system will return the url http://yourhost.com/saved.php?yourkey-yourvalue if the data is saved correctly.

To retrieve saved data, use the url below replacing "suakeysalva" with the given key.
http://yourhost.com/getdata.php?key=yourkeysaved
the system will return to url http://yourhost.com/result.php?result=yourkeysaved-yourvaluesaved, if the data is saved correctly in "yourvalue". 

Português

Criado por Leivison Dias com a ajuda de Marcos Vinicius.

É uma API de banco de dados online desenvolvida originalmente para Sketchware, mas serve para qualquer ambiente que possa processar o texto contido em uma URL. 
Foi desenvolvido para implementar a gravação e a recuperação de dados em ambientes de desenvolvimento que não possuem capacidade de conexão com banco de dados externo de maneira nativa. A API foi desenvolvida em PHP e SQL, e utiliza URL's pré costruidas seguindo regras especificas para entregar e recuperar os dados.

* Para instalar preencha o arquivo config.php com os dados do seu banco de dados MySQL,
* transfira os arquivos para o seu host,
* execute o arquivo install.php,
* aguarde a menssagem "If you are reading this text, it is because the installation was successful!",
* se ela aparecer sua API esta configurada e pronta para usar.

Para salvar dados use a url abaixo substituindo "suakey" pela chave do dado e "seuvalue" pelo valor do dado.
http://yourhost.com/setdata.php?key=suakey&value=seuvalue 
o sistema vai retornar a url http://yourhost.com/saved.php?suakey-seuvalue se o dado for salvo corretamente.

Para recuperar dados salvos use a url abaixo substituindo "suakeysalva" pela chave do dado.
http://yourhost.com/getdata.php?key=suakeysalva 
o sistema vai retornar a url http://yourhost.com/result.php?result=suakeysalva-seuvaluesalvo, se o dado for salvo corretamente em "seuvaluesalvo".


