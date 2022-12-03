


```yaml
users:
    Attributes:
        name: string
        email: string
    Relationships:
        wishlists: hasMany
        wishes: hasManyThroguh(wishlist)

wishlist:
    Attributes:
        name: string
        user_id: fk
    Relationships:
        wishes: hasMany
        owner: belongsTo(user)

wish:
    Attributes:
        wishlist_id: fk
        title: string
        description: string
        url: string
        price: integer

    Relationships:
        wishlist: belongsTo(wishlist)

images:
    Attributes:
        imageable_type: string
        imageable_id: string
        path: string
        # size: string
    Relationships:
        imageable: morphTo
