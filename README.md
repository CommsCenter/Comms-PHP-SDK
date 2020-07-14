# Comms PHP SDK
Comms PHP SDK is a tool which can help you manage data in your Comms store.

# Usage
## Pckg framework
Register default Provider ``\CommsCenter\Provider\Comms`` so the ``Api`` service will be resolved automatically.

``use \CommsCenter\Provider\Comms
// ...
public function providers() {
    return [
        // ...
        Comms::class,
    ];
}
// ...
$api = resolve(\CommsCenter\Comms\Api::class);
``


## Standalone usage
Instantiate new ``\CommsCenter\Comms\Api`` and provide ``$endpoint`` and ``$apiKey``.

``$api = new \CommsCenter\Comms\Api::class``

# Endpoints
Browse /api/http-ql/definition to see the list of available entities, fields and actions.

## Offers

``$offers = $api->offers()->getQuery()->where('dt_published', new Date(), '>=')->all();
$newOffer = $api->offers()->create(['title' => 'My new offer']);
$api->offers()->where('id', 5)->one()->getQuery()->set('dt_published', new Date())->save();``

# More

See comms-js-sdk for more examples with JS.

import {offers} from "comms-js-sdk/entity/offers";
let allOffers = offers.all();