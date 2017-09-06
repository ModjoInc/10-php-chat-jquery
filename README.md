# Projet 10: php-chat-jquery

## consignes
méliore ton chat avec du JQUERY

Reprend le chat que tu as développé sans pouvoir utiliser du javascript. A présent: tu peux!

Comme tu l'as développé en amélioration progressive, ajoute une couche de javascript (via jQuery) pour améliorer l'expérience-utilisateur. Attention de bien préserver le fait que ton app continue de fonctionner pour les gens qui ont désactivé le javascript (les gens utilisant le browser Tor par exemple).

    Ne pas utiliser d'iframes si le javascript est disponible, uniquement de l'ajax
    Crée ce qu'on appelle parfois un "heartbeat" ou la technique du "long polling", càd, que toutes les X secondes, un appel est fait en ajax par le client vers le serveur, pour ajouter les éventuels nouveaux messages à la conversation, sans que l'utilisateur doive "rafraichir" manuellement la page.
    idem lorsque l'utilisateur ajoute un message: que cela ne rafraichisse pas toute la page, mais que cela injecte le message dans la conversation.

N'hésitez pas à vous mettre à plusieurs pour résoudre l'énigme du heartbeat/"long polling". Hint: une technique serait par exemple d'utiliser des identifiants uniques pour chaque message... Identifiant que vous pouvez utiliser dans la requête Ajax pour vérifier dans la base de données la présence de messages plus récents entre les personnes.

Si tu as encore du temps, on pourrait imaginer que l'interface indique discrètement à l'utilisateur lorsqu'il est en train de vérifier l'existence de nouveaux messages, ou qu'on puisse envoyer une image dans la conversation, que l'on remplace les smileys par des emoji...
