<?php

return [
    'alipay' => [
        'app_id'         => '2016091400506864',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAxu2S/dv5dGV7xox29golhWR7KFoUkLotZSCmPeZnDQ8fystHjr+3BVMVywCgvlUrKkdFSLMEGJv2pi7qeo6o4cixvXBR1r4FhzG5CPceoqpF3tRuKF7A2MA90JHkX2Wm0zWdhvcMsey5jondtuE+ad0LAKmtLGhjdYH/dR9IeYvFOfbsjghA/0gxWst7GWPZGbhsTfsMPKieRbBBmXr2SEcOxHD3Jtp6hFm2rW9I+2+P+wnNeluoZqvxSlP27WymxBKRZn/5akV0hq0v8bduR9DKHi0uItDRGiwN165vXRg6oekI4J+fWM1QIZomb1rYpBK8K27e+ar52WG3WbE1dQIDAQAB',
        'private_key'    => 'MIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQCNTx4Oe8E6x+xc4UUF6mtUqMI+eQq2kQCCB+IqeBZ4+Y8g5uMWqRadsIPgMTlBPUKLlXVMHiLNmQbY3KbNL6CYrHtirKi7e6owvt9JDq07EMKLUGN+18a7uhVeud9ovnG1g/AKzuELBluWbCT7UgYrjqlA3/DU5je4XnM+Dp3pcks3NKedRTtBJfEE2DangTliA/lOoYlEAvv9+bC+OrgOPS4sr+SrVM00HsjCVCKLbuINXuL2mw+lJ9KamsiXThmpRNwGvZhDfH4StbLLsNQJDsNdfPNRuYssFOoMcDpU725H/DbkP8/tYyl1J71pcOCkA6fVjNd5EZWUJnC32/6/AgMBAAECggEAPZ+XF/HYHm45IXgLxbyo+c5uhxf6GAu8EPinJKYiBreuN0b5GVS7zCDCIe7VbSHt9zlCYeNygf6OAdyX0TtH6cyuMiXhn4Eagw96CD4iRXPVozN3cEVhIVTRJPIh/2et5t6Wu9/kPA6Vuk+HASKQFkasgOIoAHA1NG3cC+AL9VWAJNjQ9JVkMxFnOlF3f0lTVO2f8BG/xWiwH7KNK+Fb2VRLKDfdL1260MwbtL6QmcIw+ftfsX2Nr8wcykFF9mb8bH3h3DE2uEoBCG8rlx3gX8IWxluTusA3wmWr50yYq4+zUzZGbzGnnTUXx3hF+iDdsUkWmDaSPmyEC0DzbZecYQKBgQDM/ksCmpAVR/9lHcoP66NqZiUNcgNQUkg9ouLnhg5unq4Ul9l9Sl6VkSO9L2YopZjoxP13HUdVNmhiP1BOAPwEX/K/h2EPuMpBYgP513nnQ9jB+K0mZEvO7oCFjhjXvsoYUQiT6DdlJ93/LNVYsYlurRNiviczUcXDBRDCKO7JfQKBgQCweEAMb+Tm1oZw2p3GRlbQ+FnX/0khIBahwrgU3ng/Ts9NNO5uxDfxyGVhxYAKO6hf3D6m40bD83qkN1XxOILbdnHoGLgND4tsEgpdI5FTnxo3D+AViFGolStbPapCKN0Bqw0PiLKd39AA7jX3xqPonJ+6D+8hww6aoavReBN96wKBgCgH6KIDiOt++dLHNHRTccAPXmD3yMngp5bRvjm0JhFYD2qaFLCw2zOd+jqxjOOXIvshrNWb9Bgh3dSBxK7W5l/8VK0uRLgLQAPwnhImD/ond6a5Zya+I0evr41lKFjJOzHwcRphGKA6XtG78ZW2Zb4lMknwFDujVlk1Hgasc6UJAoGBAIoMR+5yyhpaz6kRHEOzWs72uTHjnw2u0IWSkfahYmgD+t9m/O7hyPH31nd5zQQ0Ty9OWCStvvojSlmUgELH9nZAXjM2wyRUeLj+E+VwoYtM93EDlkTB8z9yEgy6XKqM1PctHHZ+dVxTbaCMuOMwHaEmhT1EoclDkfUdbA/dY0IpAoGBAJJ2DJo8L8/Db3eLKhLj5s3wi10A7xWiyFBJ/8ipiXHD5UKcsvpHcnkcoeiDDgygqWPkPnvuISsbNcFVnamozSSrfQrhWSvERXu83fIIdj/dP5AutvhgCfDy9qG97jbooc8HJ+G3GygzcAtngwjvMQcM2RFFBvDHtimJs1dyQz9F',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
