<?php

/**
 * fr_FR
 *
 * French message token translations for the 'account' sprinkle.
 *
 * @package UserFrosting
 * @link http://www.userfrosting.com/components/#i18n
 * @author Alexander Weissman
 * @translator Louis Charette
 */

return [
    "ACCOUNT" => [
        "@TRANSLATION" => "Compte d'utilisateur",

        "ACCESS_DENIED" => "Hmm, on dirait que vous n'avez pas la permission de faire ceci.",

        "DISABLED" => "Ce compte a été désactivé. Veuillez nous contacter pour plus d'informations.",

        "EMAIL_UPDATED" => "Adresse email mise à jour",

        "INVALID" => "Ce compte n'existe pas. Il a peut-être été supprimé. Veuillez nous contacter pour plus d'informations.",

        "MASTER_NOT_EXISTS" => "Vous ne pouvez pas enregistrer un compte tant que le compte principal n'a pas été créé!",
        "MY" => "Mon compte",

        "SESSION_COMPROMISED" => "Votre session a été compromise. Vous devez vous déconnecter de tous les périphériques, puis vous reconnecter et vous assurer que vos données n'ont pas été altérées.",
        "SESSION_EXPIRED" => "Votre session a expiré. Veuillez vous connecter à nouveau.",

        "SETTINGS" => [
            "@TRANSLATION" => "Paramètres du compte",
            "DESCRIPTION" => "Mettez à jour les paramètres de votre compte, y compris votre adresse e-mail, votre nom et votre mot de passe.",
            "UPDATED" => "Paramètres du compte mis à jour"
        ],

        "UNVERIFIED" => "Votre compte n'a pas encore été vérifié. Vérifiez vos emails / dossier spam pour les instructions d'activation du compte.",

        "VERIFICATION" => [
            "NEW_LINK_SENT" => "Nous avons envoyé un nouveau lien de vérification à {{email}}. Veuillez vérifier vos dossiers de boîte de réception et de spam pour ce courriel.",
            "RESEND" => "Renvoyer le courriel de validation",
            "COMPLETE" => "Votre compte a été validé. Vous pouvez maintenant vous connecter.",
            "TOKEN_NOT_FOUND" => "Le jeton de vérification n'existe pas / Le compte est déjà vérifié",
        ]
    ],

    "EMAIL" => [
        "INVALID" => "Il n'y a aucun compte pour '{{email}}'.",
        "IN_USE" => "Le email '{{email}}' est déjà utilisé."
    ],

    "FIRST_NAME" => "Prénom",

    "HEADER_MESSAGE_ROOT" => "VOUS ÊTES CONNECTÉ EN TANT QUE L'UTILISATEUR ROOT",

    "LAST_NAME" => "Nom de famille",

    "LOGIN" => [
        "@TRANSLATION" => "Connexion",

        "ALREADY_COMPLETE" => "Vous êtes déjà connecté!",
        "SOCIAL" => "Ou se connecter avec",
        "REQUIRED" => "Désolé, vous devez être connecté pour accéder à cette ressource."
    ],

    "LOGOUT" => "Déconnexion",

    "NAME" => "Nom",

    "PAGE" => [
        "LOGIN" => [
            "DESCRIPTION" => "Connectez-vous à votre compte {{site_name}} ou enregistrez-vous pour un nouveau compte.",
            "SUBTITLE" => "Inscrivez-vous gratuitement ou connectez-vous avec un compte existant.",
            "TITLE" => "Commençons!",
        ]
    ],

    "PASSWORD" => [
        "@TRANSLATION" => "Mot de passe",

        "BETWEEN" => "Mot de passe ({{min}}-{{max}} characters)",
        "CONFIRM" => "Confirmer le mot de passe",
        "CONFIRM_CURRENT" => "Veuillez confirmer votre mot de passe actuel",
        "FORGET" => [
            "@TRANSLATION" => "J'ai oublié mon mot de passe",

            "COULD_NOT_UPDATE" => "Impossible de mettre à jour le mot de passe.",
            "INVALID" => "Cette requête de réinitialisation de mot de passe n'a pas pu être trouvée ou a expiré. Veuillez réessayer <a href=\"{{url}}\"> de soumettre votre demande <a>.",
            "REQUEST_CANNED" => "Demande de mot de passe perdu annulée.",
            "REQUEST_SENT" => "Un lien de réinitialisation du mot de passe a été envoyé à {{email}}."
        ],
        "HASH_FAILED" => "Le hachage du mot de passe a échoué. Veuillez contacter un administrateur de site.",
        "INVALID" => "Le mot de passe actuel ne correspond pas à celui que nous avons au dossier",
        "NOTHING_TO_UPDATE" => "Vous ne pouvez pas mettre à jour avec le même mot de passe",
        "UPDATED" => "Mot de passe du compte mis à jour"
    ],

    "REGISTER" => "S'inscrire",
    "REGISTER_ME" => "S'inscrire",

    "REGISTRATION" => [
        "BROKEN" => "Nous sommes désolés, il ya un problème avec notre processus d'enregistrement de compte. Veuillez nous contacter directement pour obtenir de l'aide.",
        "COMPLETE_TYPE1" => "Vous êtes inscrit avec succès. Vous pouvez maintenant vous connecter.",
        "COMPLETE_TYPE2" => "Vous êtes inscrit avec succès. Vous recevrez bientôt un e-mail de validation contenant un lien pour activer votre compte. Vous ne pourrez pas vous connecter avant d'avoir terminé cette étape.",
        "DISABLED" => "Désolé, l'enregistrement de compte a été désactivé.",
        "LOGOUT" => "Désolé, vous ne pouvez pas vous inscrire tout en étant connecté. Veuillez vous déconnecter en premier.",
        "WELCOME" => "L'inscription est rapide et simple."
    ],

    "RATE_LIMIT_EXCEEDED" => "La limite tarifaire pour cette action a été dépassée. Vous devez attendre un autre {{délai}} secondes avant de pouvoir effectuer une autre tentative.",
    "REMEMBER_ME" => "Se souvenir de moi!",
    "REMEMBER_ME_ON_COMPUTER" => "Se souvenir de moi sur cet ordinateur (non recommandé pour les ordinateurs publics)",

    "SIGNIN" => "Se connecter",
    "SIGNIN_OR_REGISTER" => "Se connecter ou s'inscrire",
    "SIGNUP" => "S'inscrire",

    "TOS" => "termes et conditions",
    "TOS_AGREEMENT" => "En créant un compte avec {{site_title}}, vous acceptez {{LINK}}.",

    "USERNAME" => [
        "@TRANSLATION" => "Nom d'utilisateur",

        "CHOOSE" => "Choisissez un nom d'utilisateur unique",
        "INVALID" => "Nom d'utilisateur invalide",
        "IN_USE" => "Le nom d'utilisateur '{{username}}' est déjà utilisé."
    ],

    "USER_ID_INVALID" => "L'identifiant d'utilisateur demandé n'existe pas.",
    "USER_OR_EMAIL_INVALID" => "Nom d'utilisateur ou adresse e-mail non valide.",
    "USER_OR_PASS_INVALID" => "Nom d'utilisateur ou mot de passe incorrect.",

    "WELCOME" => "Bienvenue {{first_name}}"
];