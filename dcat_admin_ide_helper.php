<?php

/**
 * A helper file for Dcat Admin, to provide autocomplete information to your IDE
 *
 * This file should not be included in your code, only analyzed by your IDE!
 *
 * @author jqh <841324345@qq.com>
 */
namespace Dcat\Admin {
    use Illuminate\Support\Collection;

    /**
     * @property Grid\Column|Collection id
     * @property Grid\Column|Collection name
     * @property Grid\Column|Collection type
     * @property Grid\Column|Collection version
     * @property Grid\Column|Collection detail
     * @property Grid\Column|Collection created_at
     * @property Grid\Column|Collection updated_at
     * @property Grid\Column|Collection is_enabled
     * @property Grid\Column|Collection parent_id
     * @property Grid\Column|Collection order
     * @property Grid\Column|Collection icon
     * @property Grid\Column|Collection uri
     * @property Grid\Column|Collection extension
     * @property Grid\Column|Collection permission_id
     * @property Grid\Column|Collection menu_id
     * @property Grid\Column|Collection slug
     * @property Grid\Column|Collection http_method
     * @property Grid\Column|Collection http_path
     * @property Grid\Column|Collection role_id
     * @property Grid\Column|Collection user_id
     * @property Grid\Column|Collection value
     * @property Grid\Column|Collection username
     * @property Grid\Column|Collection password
     * @property Grid\Column|Collection avatar
     * @property Grid\Column|Collection remember_token
     * @property Grid\Column|Collection cid
     * @property Grid\Column|Collection path
     * @property Grid\Column|Collection province_code
     * @property Grid\Column|Collection code
     * @property Grid\Column|Collection city_code
     * @property Grid\Column|Collection uuid
     * @property Grid\Column|Collection connection
     * @property Grid\Column|Collection queue
     * @property Grid\Column|Collection payload
     * @property Grid\Column|Collection exception
     * @property Grid\Column|Collection failed_at
     * @property Grid\Column|Collection category_id
     * @property Grid\Column|Collection store
     * @property Grid\Column|Collection sales
     * @property Grid\Column|Collection original_price
     * @property Grid\Column|Collection price
     * @property Grid\Column|Collection status
     * @property Grid\Column|Collection trade_id
     * @property Grid\Column|Collection goods_id
     * @property Grid\Column|Collection total_price
     * @property Grid\Column|Collection email
     * @property Grid\Column|Collection token
     * @property Grid\Column|Collection tokenable_type
     * @property Grid\Column|Collection tokenable_id
     * @property Grid\Column|Collection abilities
     * @property Grid\Column|Collection last_used_at
     * @property Grid\Column|Collection expires_at
     * @property Grid\Column|Collection platform_id
     * @property Grid\Column|Collection shop_id
     * @property Grid\Column|Collection trade_no
     * @property Grid\Column|Collection distinct_code
     * @property Grid\Column|Collection town
     * @property Grid\Column|Collection address
     * @property Grid\Column|Collection mobile
     * @property Grid\Column|Collection goods_amount
     * @property Grid\Column|Collection post_amount
     * @property Grid\Column|Collection total_amount
     * @property Grid\Column|Collection waybill_id
     * @property Grid\Column|Collection sex
     * @property Grid\Column|Collection age
     * @property Grid\Column|Collection email_verified_at
     * @property Grid\Column|Collection logistics_id
     * @property Grid\Column|Collection logistics_no
     *
     * @method Grid\Column|Collection id(string $label = null)
     * @method Grid\Column|Collection name(string $label = null)
     * @method Grid\Column|Collection type(string $label = null)
     * @method Grid\Column|Collection version(string $label = null)
     * @method Grid\Column|Collection detail(string $label = null)
     * @method Grid\Column|Collection created_at(string $label = null)
     * @method Grid\Column|Collection updated_at(string $label = null)
     * @method Grid\Column|Collection is_enabled(string $label = null)
     * @method Grid\Column|Collection parent_id(string $label = null)
     * @method Grid\Column|Collection order(string $label = null)
     * @method Grid\Column|Collection icon(string $label = null)
     * @method Grid\Column|Collection uri(string $label = null)
     * @method Grid\Column|Collection extension(string $label = null)
     * @method Grid\Column|Collection permission_id(string $label = null)
     * @method Grid\Column|Collection menu_id(string $label = null)
     * @method Grid\Column|Collection slug(string $label = null)
     * @method Grid\Column|Collection http_method(string $label = null)
     * @method Grid\Column|Collection http_path(string $label = null)
     * @method Grid\Column|Collection role_id(string $label = null)
     * @method Grid\Column|Collection user_id(string $label = null)
     * @method Grid\Column|Collection value(string $label = null)
     * @method Grid\Column|Collection username(string $label = null)
     * @method Grid\Column|Collection password(string $label = null)
     * @method Grid\Column|Collection avatar(string $label = null)
     * @method Grid\Column|Collection remember_token(string $label = null)
     * @method Grid\Column|Collection cid(string $label = null)
     * @method Grid\Column|Collection path(string $label = null)
     * @method Grid\Column|Collection province_code(string $label = null)
     * @method Grid\Column|Collection code(string $label = null)
     * @method Grid\Column|Collection city_code(string $label = null)
     * @method Grid\Column|Collection uuid(string $label = null)
     * @method Grid\Column|Collection connection(string $label = null)
     * @method Grid\Column|Collection queue(string $label = null)
     * @method Grid\Column|Collection payload(string $label = null)
     * @method Grid\Column|Collection exception(string $label = null)
     * @method Grid\Column|Collection failed_at(string $label = null)
     * @method Grid\Column|Collection category_id(string $label = null)
     * @method Grid\Column|Collection store(string $label = null)
     * @method Grid\Column|Collection sales(string $label = null)
     * @method Grid\Column|Collection original_price(string $label = null)
     * @method Grid\Column|Collection price(string $label = null)
     * @method Grid\Column|Collection status(string $label = null)
     * @method Grid\Column|Collection trade_id(string $label = null)
     * @method Grid\Column|Collection goods_id(string $label = null)
     * @method Grid\Column|Collection total_price(string $label = null)
     * @method Grid\Column|Collection email(string $label = null)
     * @method Grid\Column|Collection token(string $label = null)
     * @method Grid\Column|Collection tokenable_type(string $label = null)
     * @method Grid\Column|Collection tokenable_id(string $label = null)
     * @method Grid\Column|Collection abilities(string $label = null)
     * @method Grid\Column|Collection last_used_at(string $label = null)
     * @method Grid\Column|Collection expires_at(string $label = null)
     * @method Grid\Column|Collection platform_id(string $label = null)
     * @method Grid\Column|Collection shop_id(string $label = null)
     * @method Grid\Column|Collection trade_no(string $label = null)
     * @method Grid\Column|Collection distinct_code(string $label = null)
     * @method Grid\Column|Collection town(string $label = null)
     * @method Grid\Column|Collection address(string $label = null)
     * @method Grid\Column|Collection mobile(string $label = null)
     * @method Grid\Column|Collection goods_amount(string $label = null)
     * @method Grid\Column|Collection post_amount(string $label = null)
     * @method Grid\Column|Collection total_amount(string $label = null)
     * @method Grid\Column|Collection waybill_id(string $label = null)
     * @method Grid\Column|Collection sex(string $label = null)
     * @method Grid\Column|Collection age(string $label = null)
     * @method Grid\Column|Collection email_verified_at(string $label = null)
     * @method Grid\Column|Collection logistics_id(string $label = null)
     * @method Grid\Column|Collection logistics_no(string $label = null)
     */
    class Grid {}

    class MiniGrid extends Grid {}

    /**
     * @property Show\Field|Collection id
     * @property Show\Field|Collection name
     * @property Show\Field|Collection type
     * @property Show\Field|Collection version
     * @property Show\Field|Collection detail
     * @property Show\Field|Collection created_at
     * @property Show\Field|Collection updated_at
     * @property Show\Field|Collection is_enabled
     * @property Show\Field|Collection parent_id
     * @property Show\Field|Collection order
     * @property Show\Field|Collection icon
     * @property Show\Field|Collection uri
     * @property Show\Field|Collection extension
     * @property Show\Field|Collection permission_id
     * @property Show\Field|Collection menu_id
     * @property Show\Field|Collection slug
     * @property Show\Field|Collection http_method
     * @property Show\Field|Collection http_path
     * @property Show\Field|Collection role_id
     * @property Show\Field|Collection user_id
     * @property Show\Field|Collection value
     * @property Show\Field|Collection username
     * @property Show\Field|Collection password
     * @property Show\Field|Collection avatar
     * @property Show\Field|Collection remember_token
     * @property Show\Field|Collection cid
     * @property Show\Field|Collection path
     * @property Show\Field|Collection province_code
     * @property Show\Field|Collection code
     * @property Show\Field|Collection city_code
     * @property Show\Field|Collection uuid
     * @property Show\Field|Collection connection
     * @property Show\Field|Collection queue
     * @property Show\Field|Collection payload
     * @property Show\Field|Collection exception
     * @property Show\Field|Collection failed_at
     * @property Show\Field|Collection category_id
     * @property Show\Field|Collection store
     * @property Show\Field|Collection sales
     * @property Show\Field|Collection original_price
     * @property Show\Field|Collection price
     * @property Show\Field|Collection status
     * @property Show\Field|Collection trade_id
     * @property Show\Field|Collection goods_id
     * @property Show\Field|Collection total_price
     * @property Show\Field|Collection email
     * @property Show\Field|Collection token
     * @property Show\Field|Collection tokenable_type
     * @property Show\Field|Collection tokenable_id
     * @property Show\Field|Collection abilities
     * @property Show\Field|Collection last_used_at
     * @property Show\Field|Collection expires_at
     * @property Show\Field|Collection platform_id
     * @property Show\Field|Collection shop_id
     * @property Show\Field|Collection trade_no
     * @property Show\Field|Collection distinct_code
     * @property Show\Field|Collection town
     * @property Show\Field|Collection address
     * @property Show\Field|Collection mobile
     * @property Show\Field|Collection goods_amount
     * @property Show\Field|Collection post_amount
     * @property Show\Field|Collection total_amount
     * @property Show\Field|Collection waybill_id
     * @property Show\Field|Collection sex
     * @property Show\Field|Collection age
     * @property Show\Field|Collection email_verified_at
     * @property Show\Field|Collection logistics_id
     * @property Show\Field|Collection logistics_no
     *
     * @method Show\Field|Collection id(string $label = null)
     * @method Show\Field|Collection name(string $label = null)
     * @method Show\Field|Collection type(string $label = null)
     * @method Show\Field|Collection version(string $label = null)
     * @method Show\Field|Collection detail(string $label = null)
     * @method Show\Field|Collection created_at(string $label = null)
     * @method Show\Field|Collection updated_at(string $label = null)
     * @method Show\Field|Collection is_enabled(string $label = null)
     * @method Show\Field|Collection parent_id(string $label = null)
     * @method Show\Field|Collection order(string $label = null)
     * @method Show\Field|Collection icon(string $label = null)
     * @method Show\Field|Collection uri(string $label = null)
     * @method Show\Field|Collection extension(string $label = null)
     * @method Show\Field|Collection permission_id(string $label = null)
     * @method Show\Field|Collection menu_id(string $label = null)
     * @method Show\Field|Collection slug(string $label = null)
     * @method Show\Field|Collection http_method(string $label = null)
     * @method Show\Field|Collection http_path(string $label = null)
     * @method Show\Field|Collection role_id(string $label = null)
     * @method Show\Field|Collection user_id(string $label = null)
     * @method Show\Field|Collection value(string $label = null)
     * @method Show\Field|Collection username(string $label = null)
     * @method Show\Field|Collection password(string $label = null)
     * @method Show\Field|Collection avatar(string $label = null)
     * @method Show\Field|Collection remember_token(string $label = null)
     * @method Show\Field|Collection cid(string $label = null)
     * @method Show\Field|Collection path(string $label = null)
     * @method Show\Field|Collection province_code(string $label = null)
     * @method Show\Field|Collection code(string $label = null)
     * @method Show\Field|Collection city_code(string $label = null)
     * @method Show\Field|Collection uuid(string $label = null)
     * @method Show\Field|Collection connection(string $label = null)
     * @method Show\Field|Collection queue(string $label = null)
     * @method Show\Field|Collection payload(string $label = null)
     * @method Show\Field|Collection exception(string $label = null)
     * @method Show\Field|Collection failed_at(string $label = null)
     * @method Show\Field|Collection category_id(string $label = null)
     * @method Show\Field|Collection store(string $label = null)
     * @method Show\Field|Collection sales(string $label = null)
     * @method Show\Field|Collection original_price(string $label = null)
     * @method Show\Field|Collection price(string $label = null)
     * @method Show\Field|Collection status(string $label = null)
     * @method Show\Field|Collection trade_id(string $label = null)
     * @method Show\Field|Collection goods_id(string $label = null)
     * @method Show\Field|Collection total_price(string $label = null)
     * @method Show\Field|Collection email(string $label = null)
     * @method Show\Field|Collection token(string $label = null)
     * @method Show\Field|Collection tokenable_type(string $label = null)
     * @method Show\Field|Collection tokenable_id(string $label = null)
     * @method Show\Field|Collection abilities(string $label = null)
     * @method Show\Field|Collection last_used_at(string $label = null)
     * @method Show\Field|Collection expires_at(string $label = null)
     * @method Show\Field|Collection platform_id(string $label = null)
     * @method Show\Field|Collection shop_id(string $label = null)
     * @method Show\Field|Collection trade_no(string $label = null)
     * @method Show\Field|Collection distinct_code(string $label = null)
     * @method Show\Field|Collection town(string $label = null)
     * @method Show\Field|Collection address(string $label = null)
     * @method Show\Field|Collection mobile(string $label = null)
     * @method Show\Field|Collection goods_amount(string $label = null)
     * @method Show\Field|Collection post_amount(string $label = null)
     * @method Show\Field|Collection total_amount(string $label = null)
     * @method Show\Field|Collection waybill_id(string $label = null)
     * @method Show\Field|Collection sex(string $label = null)
     * @method Show\Field|Collection age(string $label = null)
     * @method Show\Field|Collection email_verified_at(string $label = null)
     * @method Show\Field|Collection logistics_id(string $label = null)
     * @method Show\Field|Collection logistics_no(string $label = null)
     */
    class Show {}

    /**
     
     */
    class Form {}

}

namespace Dcat\Admin\Grid {
    /**
     
     */
    class Column {}

    /**
     
     */
    class Filter {}
}

namespace Dcat\Admin\Show {
    /**
     
     */
    class Field {}
}
