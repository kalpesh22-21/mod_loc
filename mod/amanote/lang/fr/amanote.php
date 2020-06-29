<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * French strings for Amanote.
 *
 * @package     mod_amanote
 * @copyright   2018 Amaplex Software
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Amanote';
$string['modulename'] = 'Fichier annotable';
$string['modulenameplural'] = 'Fichiers annotables';
$string['modulename_help'] = 'Un fichier annotable est une ressource de cours (PDF) qu\'un étudiant peut ouvrir dans Amanote© afin d’y prendre des notes propres et structurées.

L\'étudiant a la possibilité de :

* Ouvrir la ressource de cours dans un nouvel onglet de son navigateur
* Télécharger la ressource de cours sur son ordinateur
* Ouvrir la ressource de cours dans Amanote© et démarrer une prise de notes

Quand l\'étudiant ouvre la ressource de cours dans Amanote©, il a la possibilité de démarrer une prise de notes intelligente. Ses notes sont liées aux différentes pages du document et il a la possibilité d’enrichir ses notes avec des formules mathématiques, des annotations, des dessins, des images, du surlignage dans les slides, etc.

Quand l\'utilisateur sauve sa prise de notes, ses notes sont sauvées dans avec la ressource dans son espace personnel. La prochaine fois qu\'il ouvrira la ressource, il récupérera ses notes comme elles étaient avant de quitter l’application.';
$string['amanote:addinstance'] = 'Ajouter un nouveau fichier annotable';
$string['amanote:view'] = 'Ouvrir le fichier annotable';
$string['amanotecontent'] = 'Fichiers et sous-dossiers';
$string['downloadfile'] = 'Télécharger';
$string['clicktoopen'] = 'Ouvrir dans un nouvel onglet';
$string['clicktodownloadfile'] = 'Télécharger le fichier PDF';
$string['clicktodownloadnotes'] = 'Télécharger le fichier annoté';
$string['clicktoamanote'] = 'Ouvrir dans Amanote';
$string['statisticsbutton'] = 'Ouvrir Learning Analytics';
$string['openstatistics'] = 'Ouvrir Learning Analytics';
$string['openstatistics_help'] = 'Cela vous permet d\'accéder aux statistiques d\'utilisation des étudiants et à leur feedback sur cette ressource.';
$string['podcastcreatorbutton'] = 'Ouvrir Podcast Creator';
$string['openpodcastcreator'] = 'Ouvrir Podcast Creator';
$string['openpodcastcreator_help'] = 'Le créateur de podcast vous permet d\'enregistrer un nouveau podcast ou d\'éditer un podcast existant';
$string['autosaveperiod'] = 'Intervalle de sauvegarde automatique';
$string['autosaveperiod_help'] = 'Configurer l\'intervalle de temps en minutes entre les sauvegardes automatiques (min. 1, max.: 30). Un intervalle de 0 signifie pas de sauvegarde automatique.';
$string['saveinprivate'] = 'Sauver les notes dans les fichiers personnels';
$string['saveinprivate_help'] = 'Sauve le fichier annoté dans les fichiers personnels de l\'utilisateur. Cela permettra à l\'utilisateur de continuer sa prise de note la prochaine fois qu\'il ouvre le fichier annotable dans Amanote.';
$string['key'] = 'Clé d\'activation';
$string['key_help'] = 'Cette clé est requise pour les fonctionalités avancées telles que le créateur de podcasts.';
$string['dnduploadamanote'] = 'Créer un fichier annotable';
$string['showdate'] = 'Afficher la date de dépôt/de modification';
$string['showdate_desc'] = 'Afficher la date de dépôt/de modification sur la page de cours?';
$string['showdate_help'] = 'Permet d\'afficher la date de dépôt ou de modification à côté du lien vers la ressource.';
$string['showsize'] = 'Afficher la taille';
$string['showsize_desc'] = 'Si ce réglage est activé, la date de dépôt/de modification est affichée sur la page du cours';
$string['showsize_help'] = 'Permet d\'afficher la taille, par example \'3.1 MB\', à côté du lien vers la ressource.';
$string['printintro'] = 'Afficher la description de la ressource';
$string['printintroexplain'] = 'Affiche la description de la resource au-dessus du contenu.';
$string['uploadeddate'] = 'Déposé le {$a}';
$string['modifieddate'] = 'Modifié le {$a}';
$string['amanotedetails_sizetype'] = '{$a->size} {$a->type}';
$string['amanotedetails_sizedate'] = '{$a->size} {$a->date}';
$string['amanotedetails_typedate'] = '{$a->type} {$a->date}';
$string['amanotedetails_sizetypedate'] = '{$a->size} {$a->type} {$a->date}';
$string['openinamanote'] = 'Ouvrir dans Amanote';
$string['openinamanote_help'] = 'Ouvrir le document dans Amanote permet de démarrer ou continuer une prise de note.';
$string['cannotcreatetoken'] = 'Ouvrir dans Amanote';
$string['cannotcreatetoken_help'] = 'Vous n\'avez pas les permissions pour ouvrir ce document dans Amanote.';
$string['servicenotavailable'] = 'Ouvrir dans Amanote';
$string['servicenotavailable_help'] = 'Le service n\'est pas activé. Veuillez contacter l\'administrateur du site.';
$string['guestsarenotallowed'] = 'Ouvrir dans Amanote';
$string['guestsarenotallowed_help'] = 'Les visiteurs anonymes ne peuvent pas ouvrir de ressources dans Amanote. Veuillez vous connecter pour accéder à cette fonctionnalité.';
$string['unexpectederror'] = 'Ouvrir dans Amanote';
$string['unexpectederror_help'] = 'Une erreur inattendue est survenue, la ressource n\'est pas ouvrable dans Amanote. Veuillez contacter l\'administrateur du site.';
$string['unsecureconnection'] = 'Attention ! Votre connexion n\'est pas sécurisée.';
$string['privacy:metadata'] = 'Pour s\'intégrer avec Amanote, certaines données utilisateur doivent être envoyées à l\'application Amanote (système distant).';
$string['privacy:metadata:userid'] = 'Le userid est envoyé depuis Moodle pour accélérer le processus d\'authentification.';
$string['privacy:metadata:fullname'] = 'Le nom complet de l\'utilisateur est envoyé au système distant pour permettre une meilleure expérience utilisateur.';
$string['privacy:metadata:email'] = 'L\'adresse e-mail de l\'utilisateur est envoyée au système distant pour permettre une meilleure expérience utilisateur (partage de notes, notification, etc.).';
$string['privacy:metadata:subsystem:corefiles'] = 'Les fichiers (PDF, AMA) sont stockés avec le système de fichiers Moodle.';
$string['nonotestodownload'] = 'Télécharger le fichier annoté';
$string['nonotestodownload_help'] = 'Vous n\'avez pas encore de notes sauvées pour ce document.';
$string['pluginadministration'] = 'Administration du module Amanote';
$string['importantinformationheading'] = 'Important installation information';
$string['importantinformationdescription'] = 'Afin que le module fonctionne correctement, veuillez vérifier que les exigences suivantes sont respectées:

1. Les services web sont activés (Administration du site > Fonctions avancées)

2. Le service *Moodle mobile web service* est activé (Administration du site > Plugins > Web services > Services externes)

3. Le protocole REST est activé (Administration du site > Plugins > Services web > Gérer les protocoles)

4. La capacité *webservice/rest:use* est autorisée pour les *utilisateurs authentifiés* (Administration du site > Utilisateurs > Permissions > Définition des rôles > Utilisateur authentifié > Gérer les rôles)';
