# Configuration Stripe pour Digital Kappa

Ce guide explique comment configurer Stripe comme passerelle de paiement pour votre boutique WooCommerce.

## Prérequis

1. Un compte Stripe (créer sur https://stripe.com)
2. WordPress avec WooCommerce installé
3. Le thème Digital Kappa activé

## Étape 1: Installer le plugin WooCommerce Stripe

1. Allez dans **Extensions > Ajouter**
2. Recherchez "**WooCommerce Stripe Payment Gateway**" (plugin officiel)
3. Cliquez sur **Installer** puis **Activer**

## Étape 2: Configurer les clés API Stripe

### Récupérer vos clés API

1. Connectez-vous à votre [Dashboard Stripe](https://dashboard.stripe.com)
2. Allez dans **Developers > API keys**
3. Copiez votre **Publishable key** et **Secret key**

> ⚠️ Pour les tests, utilisez les clés de test (commençant par `pk_test_` et `sk_test_`)

### Configurer dans WooCommerce

1. Allez dans **WooCommerce > Réglages > Paiements**
2. Cliquez sur **Stripe** pour le configurer
3. Activez Stripe en cochant **Activer Stripe**
4. Entrez vos clés:
   - **Clé publiable**: `pk_live_...` ou `pk_test_...`
   - **Clé secrète**: `sk_live_...` ou `sk_test_...`
5. Configurez les options:
   - **Titre**: Carte bancaire
   - **Description**: Paiement sécurisé par carte bancaire
   - **Capture**: Activer
6. Sauvegardez les modifications

## Étape 3: Configurer les Webhooks

Les webhooks permettent à Stripe de notifier votre boutique des événements de paiement.

### Créer un Webhook

1. Dans le Dashboard Stripe, allez dans **Developers > Webhooks**
2. Cliquez sur **Add endpoint**
3. Entrez l'URL: `https://votre-site.com/?wc-api=wc_stripe`
4. Sélectionnez les événements:
   - `payment_intent.succeeded`
   - `payment_intent.payment_failed`
   - `charge.succeeded`
   - `charge.failed`
   - `charge.refunded`
5. Cliquez sur **Add endpoint**
6. Copiez le **Webhook signing secret**

### Configurer dans WooCommerce

1. Retournez dans **WooCommerce > Réglages > Paiements > Stripe**
2. Dans la section **Webhook**, entrez le **Webhook secret**
3. Sauvegardez

## Étape 4: Tester la configuration

### Mode Test

1. Assurez-vous d'utiliser les clés de test
2. Utilisez les cartes de test Stripe:
   - **Succès**: `4242 4242 4242 4242`
   - **Refusée**: `4000 0000 0000 0002`
   - **Auth requise**: `4000 0025 0000 3155`
3. Utilisez n'importe quelle date future et CVC à 3 chiffres

### Effectuer un achat test

1. Ajoutez un produit au panier
2. Procédez au checkout
3. Entrez les informations de carte de test
4. Vérifiez que la commande est créée avec succès
5. Vérifiez que le téléchargement est disponible

## Étape 5: Passer en production

1. Dans le Dashboard Stripe, obtenez vos clés **Live**
2. Remplacez les clés de test par les clés de production dans WooCommerce
3. Mettez à jour le Webhook avec les nouvelles clés
4. Effectuez un vrai paiement de test (montant minimal)

## Configuration recommandée pour produits numériques

Le thème Digital Kappa est déjà configuré pour:

- ✅ Redirection directe vers le checkout (pas de panier)
- ✅ Complétion automatique des commandes virtuelles
- ✅ Envoi immédiat des liens de téléchargement par email
- ✅ Checkout simplifié (pas d'adresse de livraison)

## Personnalisation du checkout

### Champs du formulaire

Les champs de facturation peuvent être personnalisés dans:
`inc/woocommerce-functions.php` → fonction `dk_checkout_fields()`

### Apparence

Le style du checkout est dans:
- `assets/css/custom.css` → section "Checkout Styles"
- `woocommerce/checkout/form-checkout.php`

## Résolution des problèmes

### Le paiement échoue

1. Vérifiez les logs dans **WooCommerce > État > Logs**
2. Vérifiez le Dashboard Stripe pour les erreurs
3. Assurez-vous que les clés API sont correctes
4. Vérifiez que le SSL est actif sur votre site

### Les emails ne sont pas envoyés

1. Vérifiez **WooCommerce > Réglages > E-mails**
2. Activez l'email "Commande terminée"
3. Utilisez un plugin SMTP si nécessaire (ex: WP Mail SMTP)

### Les téléchargements ne fonctionnent pas

1. Vérifiez que les produits sont configurés comme "Téléchargeable"
2. Vérifiez les permissions de fichiers
3. Vérifiez **WooCommerce > Réglages > Produits > Produits téléchargeables**

## Support

Pour toute question sur l'intégration Stripe:
- Documentation Stripe: https://stripe.com/docs
- Support WooCommerce: https://woocommerce.com/support/
- Plugin Stripe: https://wordpress.org/plugins/woocommerce-gateway-stripe/
