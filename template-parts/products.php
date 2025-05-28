<div id='collection-component-1742841331221'></div>
<script type="text/javascript">
/*<![CDATA[*/
(function () {
  var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
  if (window.ShopifyBuy) {
    if (window.ShopifyBuy.UI) {
      ShopifyBuyInit();
    } else {
      loadScript();
    }
  } else {
    loadScript();
  }
  function loadScript() {
    var script = document.createElement('script');
    script.async = true;
    script.src = scriptURL;
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
    script.onload = ShopifyBuyInit;
  }
  function ShopifyBuyInit() {
    var client = ShopifyBuy.buildClient({
      domain: 'downrightmerchinc.myshopify.com',
      storefrontAccessToken: '8c57d620789366c35f3d8c4f15e625af',
    });
    ShopifyBuy.UI.onReady(client).then(function (ui) {
      ui.createComponent('collection', {
        id: '281031213137',
        node: document.getElementById('collection-component-1742841331221'),
        moneyFormat: '%24%7B%7Bamount%7D%7D',
        options: {
  "product": {
    "styles": {
      "product": {
        "@media (min-width: 601px)": {
          "max-width": "calc(50% - 40px)",
          "margin-left": "40px",
          "margin-bottom": "50px",
          "width": "calc(50% - 40px)"
        },
        "img": {
          "height": "calc(100% - 15px)",
          "position": "absolute",
          "left": "0",
          "right": "0",
          "top": "0"
        },
        "imgWrapper": {
          "padding-top": "calc(75% + 15px)",
          "position": "relative",
          "height": "0"
        }
      },
      "title": {
        "font-weight": "normal",
        "font-size": "15px",
        "color": "#000000"
      },
      "button": {
        "font-weight": "bold",
        "font-size": "14px",
        "padding-top": "15px",
        "padding-bottom": "15px",
        "color": "#fafafa",
        ":hover": {
          "color": "#fafafa",
          "background-color": "#a37aad"
        },
        "background-color": "#b587c0",
        ":focus": {
          "background-color": "#a37aad"
        },
        "border-radius": "0px",
        "padding-left": "30px",
        "padding-right": "30px"
      },
      "quantityInput": {
        "font-size": "14px",
        "padding-top": "15px",
        "padding-bottom": "15px"
      },
      "price": {
        "font-size": "15px",
        "color": "#000000"
      },
      "compareAt": {
        "font-size": "12.75px",
        "color": "#000000"
      },
      "unitPrice": {
        "font-size": "12.75px",
        "color": "#000000"
      },
      "description": {
        "font-family": "PT Sans, sans-serif",
        "color": "#ffffff"
      }
    },
    "buttonDestination": "modal",
    "contents": {
      "options": false
    },
    "text": {
      "button": "Add To Cart"
    },
    "googleFonts": [
      "PT Sans"
    ]
  },
  "productSet": {
    "styles": {
      "products": {
        "@media (min-width: 601px)": {
          "margin-left": "-40px"
        }
      }
    }
  },
  "modalProduct": {
    "contents": {
      "img": false,
      "imgWithCarousel": true,
      "button": false,
      "buttonWithQuantity": true
    },
    "styles": {
      "product": {
        "@media (min-width: 601px)": {
          "max-width": "100%",
          "margin-left": "0px",
          "margin-bottom": "0px"
        }
      },
      "button": {
        "font-weight": "bold",
        "font-size": "14px",
        "padding-top": "15px",
        "padding-bottom": "15px",
        "color": "#fafafa",
        ":hover": {
          "color": "#fafafa",
          "background-color": "#a37aad"
        },
        "background-color": "#b587c0",
        ":focus": {
          "background-color": "#a37aad"
        },
        "border-radius": "0px",
        "padding-left": "30px",
        "padding-right": "30px"
      },
      "quantityInput": {
        "font-size": "14px",
        "padding-top": "15px",
        "padding-bottom": "15px"
      },
      "title": {
        "font-family": "Helvetica Neue, sans-serif",
        "font-weight": "normal",
        "font-size": "26px",
        "color": "#000000"
      },
      "price": {
        "font-family": "Helvetica Neue, sans-serif",
        "font-weight": "normal",
        "font-size": "18px",
        "color": "#000000"
      },
      "compareAt": {
        "font-family": "Helvetica Neue, sans-serif",
        "font-weight": "normal",
        "font-size": "15.299999999999999px",
        "color": "#000000"
      },
      "unitPrice": {
        "font-family": "Helvetica Neue, sans-serif",
        "font-weight": "normal",
        "font-size": "15.299999999999999px",
        "color": "#000000"
      },
      "description": {
        "font-family": "Helvetica Neue, sans-serif",
        "font-weight": "normal",
        "font-size": "14px",
        "color": "#000000"
      }
    },
    "text": {
      "button": "Add to cart"
    }
  },
  "modal": {
    "styles": {
      "modal": {
        "background-color": "#fafafa"
      }
    }
  },
  "option": {
    "styles": {
      "label": {
        "color": "#ffffff"
      }
    }
  },
  "cart": {
    "styles": {
      "button": {
        "font-weight": "bold",
        "font-size": "14px",
        "padding-top": "15px",
        "padding-bottom": "15px",
        "color": "#fafafa",
        ":hover": {
          "color": "#fafafa",
          "background-color": "#a37aad"
        },
        "background-color": "#b587c0",
        ":focus": {
          "background-color": "#a37aad"
        },
        "border-radius": "0px"
      },
      "title": {
        "color": "#424242"
      },
      "header": {
        "color": "#424242"
      },
      "lineItems": {
        "color": "#424242"
      },
      "subtotalText": {
        "color": "#424242"
      },
      "subtotal": {
        "color": "#424242"
      },
      "notice": {
        "color": "#424242"
      },
      "currency": {
        "color": "#424242"
      },
      "close": {
        "color": "#424242",
        ":hover": {
          "color": "#424242"
        }
      },
      "empty": {
        "color": "#424242"
      },
      "noteDescription": {
        "color": "#424242"
      },
      "discountText": {
        "color": "#424242"
      },
      "discountIcon": {
        "fill": "#424242"
      },
      "discountAmount": {
        "color": "#424242"
      }
    },
    "text": {
      "total": "Subtotal"
    }
  },
  "toggle": {
    "styles": {
      "toggle": {
        "font-weight": "bold",
        "background-color": "#b587c0",
        ":hover": {
          "background-color": "#a37aad"
        },
        ":focus": {
          "background-color": "#a37aad"
        }
      },
      "count": {
        "font-size": "14px",
        "color": "#fafafa",
        ":hover": {
          "color": "#fafafa"
        }
      },
      "iconPath": {
        "fill": "#fafafa"
      }
    }
  },
  "lineItem": {
    "styles": {
      "variantTitle": {
        "color": "#424242"
      },
      "title": {
        "color": "#424242"
      },
      "price": {
        "color": "#424242"
      },
      "fullPrice": {
        "color": "#424242"
      },
      "discount": {
        "color": "#424242"
      },
      "discountIcon": {
        "fill": "#424242"
      },
      "quantity": {
        "color": "#424242"
      },
      "quantityIncrement": {
        "color": "#424242",
        "border-color": "#424242"
      },
      "quantityDecrement": {
        "color": "#424242",
        "border-color": "#424242"
      },
      "quantityInput": {
        "color": "#424242",
        "border-color": "#424242"
      }
    }
  }
},
      });
    });
  }
})();
/*]]>*/
</script>