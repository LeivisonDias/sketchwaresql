# sketchwaresql
API Sketchware SQL
API de banco de dados online para Sketchware.
Criado por Leivison Dias com a ajuda de Marcos Vinicius.

Para usar esse aplicativo de exemplo:

Este aplicativo não tem suporte a caracteres epeciais.

Salvar: Escreva uma chave em key, atribua um valor a ela em value e aperte o botão save.

Carregar: Escreva a chave em key e aperte o botão load.

Para usar a API:

Para savalvar dados: Use a url abaixo substituindo "suakey" pela chave do dado e "seuvalue" pelo valor do dado.

http://sketchwaresql.esy.es/setdata.php?key=suakey&value=seuvalue

o sistema vai retornar a url
 http://sketchwaresql.esy.es/saved.php?suakey-seuvalue

se o dado for salvo corretamente.



Para recuperar dados salvos: Use a url abaixo substituindo "suakeysalva" pela chave do dado.

http://sketchwaresql.esy.es/getdata.php?key=suakeysalva

o sistema vai retornar a url http://sketchwaresql.esy.es/result.php?result=seuvaluesalvo

 se o dado for salvo corretamente em "seuvaluesalvo".
