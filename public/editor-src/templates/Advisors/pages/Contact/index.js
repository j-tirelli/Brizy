module.exports = {
  id: "AdvisorsContact",
  thumbnailWidth: 680,
  thumbnailHeight: 1120,
  title: "Contact", 
  keywords: "contact, location, address, advisors, business, corporate, financial",
  cat: [0, 1],
  pro: true,
  resolve: { blocks:[
    {
        blockId: "Gabi041Light",
        type: "Section",
        value: {
            _styles: [
                "section"
            ],
            items: [
                {
                    type: "SectionItem",
                    value: {
                        _styles: [
                            "section-item"
                        ],
                        bgColorHex: "#ffffff",
                        paddingTop: 220,
                        paddingBottom: 220,
                        bgVideo: "https://www.youtube.com/watch?v=8lQB3Had90A",
                        tempBgColorOpacity: 0.2,
                        padding: 168,
                        items: [
                            {
                                type: "Wrapper",
                                value: {
                                    _styles: [
                                        "wrapper",
                                        "wrapper--richText"
                                    ],
                                    items: [
                                        {
                                            type: "RichText",
                                            value: {
                                                _styles: [
                                                    "richText"
                                                ],
                                                text: "<h1 class=\"brz-fs-xs-50 brz-tp-heading1 brz-text-lg-center\"><span class=\"brz-cp-color1\">Contact Us</span></h1>"
                                            }
                                        }
                                    ],
                                    marginBottom: 0,
                                    animationName: "fadeInDown",
                                    tempAnimationName: "fadeInDown",
                                    animationDuration: 900,
                                    animationDelay: 0
                                }
                            },
                            {
                                type: "Wrapper",
                                value: {
                                    _styles: [
                                        "wrapper",
                                        "wrapper--richText"
                                    ],
                                    items: [
                                        {
                                            type: "RichText",
                                            value: {
                                                _styles: [
                                                    "richText"
                                                ],
                                                text: "<h1 class=\"brz-fs-xs-18 brz-text-lg-center brz-tp-abovetitle\"><span class=\"brz-cp-color1\">LET US KNOW HOW WE CAN HELP</span></h1>"
                                            }
                                        }
                                    ],
                                    marginTop: 0,
                                    animationName: "fadeInUp",
                                    tempAnimationName: "fadeInUp",
                                    animationDuration: 900,
                                    animationDelay: 0
                                }
                            },
                            {
                                type: "Wrapper",
                                value: {
                                    _styles: [
                                        "wrapper",
                                        "wrapper--spacer"
                                    ],
                                    items: [
                                        {
                                            type: "Spacer",
                                            value: {
                                                _styles: [
                                                    "spacer"
                                                ],
                                                height: 20
                                            }
                                        }
                                    ]
                                }
                            }
                        ],
                        containerSize: 60,
                        paddingType: "ungrouped",
                        mobileBgColorOpacity: 0.35,
                        mobileBgPositionX: 67,
                        mobileBgColorPalette: "color8",
                        mobilePadding: 53,
                        mobilePaddingTop: 53,
                        mobilePaddingBottom: 53,
                        mobileBgPositionY: 54,
                        bgImageWidth: 1920,
                        bgImageHeight: 830,
                        bgImageSrc: "e26e98ecd3afd563f8cd919358057fbc.jpg",
                        bgColorOpacity: 0,
                        bgPositionX: 50,
                        bgPositionY: 50,
                        tempMobileBgColorOpacity: 1,
                        bgColorPalette: ""
                    }
                }
            ],
            sliderDotsColorPalette: "color1",
            sliderArrowsColorPalette: "color1",
            sliderArrowsColorHex: "#042935",
            _thumbnailSrc: 382736,
            _thumbnailWidth: 600,
            _thumbnailHeight: 197,
            _thumbnailTime: 1573722179996
        }
    },
    {
        blockId: "Gabi035Light",
        type: "Section",
        value: {
            _styles: [
                "section"
            ],
            items: [
                {
                    type: "SectionItem",
                    value: {
                        _styles: [
                            "section-item"
                        ],
                        bgColorHex: "#ffffff",
                        bgColorOpacity: 1,
                        items: [
                            {
                                type: "Wrapper",
                                value: {
                                    _styles: [
                                        "wrapper",
                                        "wrapper--spacer"
                                    ],
                                    items: [
                                        {
                                            type: "Spacer",
                                            value: {
                                                _styles: [
                                                    "spacer"
                                                ],
                                                height: 20
                                            }
                                        }
                                    ],
                                    showOnMobile: "off"
                                }
                            },
                            {
                                type: "Wrapper",
                                value: {
                                    _styles: [
                                        "wrapper",
                                        "wrapper--iconText"
                                    ],
                                    items: [
                                        {
                                            type: "Form2",
                                            value: {
                                                _styles: [
                                                    "form"
                                                ],
                                                items: [
                                                    {
                                                        type: "Form2Fields",
                                                        value: {
                                                            items: [
                                                                {
                                                                    type: "Form2Field",
                                                                    value: {
                                                                        type: "Email",
                                                                        label: "Email Address",
                                                                        required: "on",
                                                                        options: [
                                                                            "Option 1",
                                                                            "Option 2"
                                                                        ],
                                                                        width: 50,
                                                                        placeholder: "Email Address"
                                                                    }
                                                                },
                                                                {
                                                                    type: "Form2Field",
                                                                    value: {
                                                                        type: "Tel",
                                                                        label: "Phone Number",
                                                                        required: "on",
                                                                        options: [
                                                                            "Option 1",
                                                                            "Option 2"
                                                                        ],
                                                                        width: 50,
                                                                        placeholder: "Phone Number"
                                                                    }
                                                                },
                                                                {
                                                                    type: "Form2Field",
                                                                    value: {
                                                                        type: "Text",
                                                                        label: "Subject",
                                                                        required: "on",
                                                                        options: [
                                                                            "Option 1",
                                                                            "Option 2"
                                                                        ],
                                                                        width: 100,
                                                                        placeholder: "Subject"
                                                                    }
                                                                },
                                                                {
                                                                    type: "Form2Field",
                                                                    value: {
                                                                        type: "Paragraph",
                                                                        label: "Message",
                                                                        required: "off",
                                                                        options: [
                                                                            "Option 1",
                                                                            "Option 2"
                                                                        ],
                                                                        placeholder: "Message"
                                                                    }
                                                                }
                                                            ],
                                                            fontStyle: "paragraph",
                                                            tabsState: "",
                                                            tabsColor: "",
                                                            borderRadius: 0,
                                                            borderTopLeftRadius: 0,
                                                            borderTopRightRadius: 0,
                                                            borderBottomLeftRadius: 0,
                                                            borderBottomRightRadius: 0,
                                                            tempBorderRadius: 0,
                                                            tempBorderTopLeftRadius: 0,
                                                            tempBorderTopRightRadius: 0,
                                                            tempBorderBottomLeftRadius: 0,
                                                            tempBorderBottomRightRadius: 0,
                                                            borderStyle: "solid",
                                                            borderWidth: 1,
                                                            borderTopWidth: 1,
                                                            borderRightWidth: 1,
                                                            borderBottomWidth: 1,
                                                            borderLeftWidth: 1,
                                                            tempBorderTopWidth: 1,
                                                            tempBorderRightWidth: 1,
                                                            tempBorderBottomWidth: 1,
                                                            tempBorderLeftWidth: 1,
                                                            borderColorOpacity: 0.2,
                                                            borderColorPalette: "color7",
                                                            tempBorderColorPalette: "color7",
                                                            borderColorHex: "#73777f",
                                                            tempBorderColorOpacity: 0.2,
                                                            colorPalette: "color7",
                                                            tempColorPalette: "color7",
                                                            colorOpacity: 0.6,
                                                            colorHex: "#73777f",
                                                            tempColorOpacity: 0.6
                                                        }
                                                    },
                                                    {
                                                        type: "Button",
                                                        value: {
                                                            _styles: [
                                                                "button",
                                                                "submit"
                                                            ],
                                                            text: "SEND NOW",
                                                            iconName: "",
                                                            iconType: "",
                                                            tabsState: "",
                                                            tabsColor: "",
                                                            hoverBgColorPalette: "color2",
                                                            hoverBgColorOpacity: 1,
                                                            hoverBorderColorPalette: "",
                                                            tempHoverBorderColorPalette: "",
                                                            hoverBgColorHex: "#232c3f",
                                                            tempHoverBgColorOpacity: 1,
                                                            tempHoverBgColorPalette: "color3",
                                                            hoverBorderColorHex: "#232c3f",
                                                            hoverBorderColorOpacity: 0
                                                        }
                                                    }
                                                ],
                                                mobilePadding: 5,
                                                mobilePaddingRight: 5,
                                                mobilePaddingBottom: 5,
                                                mobilePaddingLeft: 5
                                            }
                                        }
                                    ]
                                }
                            }
                        ],
                        containerSize: 60,
                        paddingType: "ungrouped",
                        paddingBottom: 60
                    }
                }
            ],
            _thumbnailSrc: 382739,
            _thumbnailWidth: 600,
            _thumbnailHeight: 193,
            _thumbnailTime: 1573722190434
        }
    },
    {
        type: "Section",
        blockId: "Gabi035Light",
        value: {
            _styles: [
                "section"
            ],
            items: [
                {
                    type: "SectionItem",
                    value: {
                        _styles: [
                            "section-item"
                        ],
                        bgColorHex: "#ffffff",
                        bgColorOpacity: 1,
                        items: [
                            {
                                type: "Wrapper",
                                value: {
                                    _styles: [
                                        "wrapper",
                                        "wrapper--richText"
                                    ],
                                    marginBottom: 0,
                                    items: [
                                        {
                                            type: "RichText",
                                            value: {
                                                _styles: [
                                                    "richText"
                                                ],
                                                text: "<h3 class=\"brz-tp-abovetitle brz-text-lg-center brz-fs-xs-16\"><span class=\"brz-cp-color5\">GET IT TOUCH</span></h3>"
                                            }
                                        }
                                    ]
                                }
                            },
                            {
                                type: "Wrapper",
                                value: {
                                    _styles: [
                                        "wrapper",
                                        "wrapper--richText"
                                    ],
                                    items: [
                                        {
                                            type: "RichText",
                                            value: {
                                                _styles: [
                                                    "richText"
                                                ],
                                                text: "<h2 class=\"brz-text-lg-center brz-tp-heading2 brz-fs-xs-35\"><span class=\"brz-cp-color2\">Contact Us</span></h2>"
                                            }
                                        }
                                    ]
                                }
                            },
                            {
                                type: "Wrapper",
                                value: {
                                    _styles: [
                                        "wrapper",
                                        "wrapper--spacer"
                                    ],
                                    items: [
                                        {
                                            type: "Spacer",
                                            value: {
                                                _styles: [
                                                    "spacer"
                                                ],
                                                height: 20
                                            }
                                        }
                                    ],
                                    showOnMobile: "off"
                                }
                            }
                        ],
                        containerSize: 60
                    }
                }
            ]
        }
    },
    {
        blockId: "Blank000Light",
        type: "Section",
        value: {
            _styles: [
                "section"
            ],
            items: [
                {
                    type: "SectionItem",
                    value: {
                        _styles: [
                            "section-item"
                        ],
                        items: [
                            {
                                type: "Row",
                                value: {
                                    _styles: [
                                        "row",
                                        "hide-row-borders",
                                        "padding-0"
                                    ],
                                    items: [
                                        {
                                            type: "Column",
                                            value: {
                                                _styles: [
                                                    "column"
                                                ],
                                                items: [
                                                    {
                                                        type: "Wrapper",
                                                        value: {
                                                            _styles: [
                                                                "wrapper",
                                                                "wrapper--line"
                                                            ],
                                                            items: [
                                                                {
                                                                    type: "Line",
                                                                    value: {
                                                                        _styles: [
                                                                            "line"
                                                                        ],
                                                                        width: 100,
                                                                        borderWidth: 3,
                                                                        borderColorPalette: "color3",
                                                                        borderColorHex: "#0d91bb",
                                                                        borderColorOpacity: 1
                                                                    }
                                                                }
                                                            ]
                                                        }
                                                    }
                                                ],
                                                paddingRight: 0,
                                                paddingLeft: 0,
                                                width: 50
                                            }
                                        },
                                        {
                                            type: "Column",
                                            value: {
                                                _styles: [
                                                    "column"
                                                ],
                                                items: [
                                                    {
                                                        type: "Wrapper",
                                                        value: {
                                                            _styles: [
                                                                "wrapper",
                                                                "wrapper--line"
                                                            ],
                                                            items: [
                                                                {
                                                                    type: "Line",
                                                                    value: {
                                                                        _styles: [
                                                                            "line"
                                                                        ],
                                                                        width: 100,
                                                                        borderWidth: 3,
                                                                        borderColorPalette: "color5",
                                                                        borderColorHex: "#0d91bb",
                                                                        borderColorOpacity: 1
                                                                    }
                                                                }
                                                            ]
                                                        }
                                                    }
                                                ],
                                                paddingRight: 0,
                                                paddingLeft: 0,
                                                showOnMobile: "off",
                                                width: 50
                                            }
                                        }
                                    ]
                                }
                            },
                            {
                                type: "Wrapper",
                                value: {
                                    _styles: [
                                        "wrapper",
                                        "wrapper--spacer"
                                    ],
                                    items: [
                                        {
                                            type: "Spacer",
                                            value: {
                                                _styles: [
                                                    "spacer"
                                                ]
                                            }
                                        }
                                    ]
                                }
                            },
                            {
                                type: "Row",
                                value: {
                                    _styles: [
                                        "row",
                                        "hide-row-borders",
                                        "padding-0"
                                    ],
                                    items: [
                                        {
                                            type: "Column",
                                            value: {
                                                _styles: [
                                                    "column"
                                                ],
                                                items: [
                                                    {
                                                        type: "Cloneable",
                                                        value: {
                                                            _styles: [
                                                                "wrapper-clone",
                                                                "wrapper-clone--icon"
                                                            ],
                                                            items: [
                                                                {
                                                                    type: "Icon",
                                                                    value: {
                                                                        _styles: [
                                                                            "icon"
                                                                        ],
                                                                        name: "newsletter",
                                                                        type: "outline"
                                                                    }
                                                                }
                                                            ]
                                                        }
                                                    },
                                                    {
                                                        type: "Wrapper",
                                                        value: {
                                                            _styles: [
                                                                "wrapper",
                                                                "wrapper--richText"
                                                            ],
                                                            items: [
                                                                {
                                                                    type: "RichText",
                                                                    value: {
                                                                        _styles: [
                                                                            "richText"
                                                                        ],
                                                                        text: "<p class=\"brz-text-lg-center brz-tp-heading4 brz-fs-xs-25\"><span class=\"brz-cp-color1\">Information</span></p>"
                                                                    }
                                                                }
                                                            ]
                                                        }
                                                    },
                                                    {
                                                        type: "Wrapper",
                                                        value: {
                                                            _styles: [
                                                                "wrapper",
                                                                "wrapper--richText"
                                                            ],
                                                            items: [
                                                                {
                                                                    type: "RichText",
                                                                    value: {
                                                                        _styles: [
                                                                            "richText"
                                                                        ],
                                                                        text: "<p class=\"brz-text-lg-center brz-tp-paragraph brz-mb-lg-0 brz-fs-xs-17\"><span class=\"brz-cp-color4\">Tel: 0253.567.363</span></p><p class=\"brz-text-lg-center brz-tp-paragraph brz-fs-xs-17\"><span class=\"brz-cp-color4\">Email: office@the-advisors.net</span></p><p class=\"brz-text-lg-center brz-tp-paragraph brz-fs-xs-17\"><span class=\"brz-cp-color4\">Fax: 0638.998.464</span></p>"
                                                                    }
                                                                }
                                                            ]
                                                        }
                                                    }
                                                ],
                                                width: 33.3,
                                                borderWidthType: "ungrouped",
                                                borderRightWidth: 1,
                                                tempBorderRightWidth: 1,
                                                tempBorderLeftWidth: 0,
                                                tempBorderBottomWidth: 0,
                                                tempBorderTopWidth: 0,
                                                borderColorOpacity: 1,
                                                borderColorPalette: "color5",
                                                borderColorHex: "",
                                                mobilePaddingRight: 10,
                                                mobilePaddingLeft: 10
                                            }
                                        },
                                        {
                                            type: "Column",
                                            value: {
                                                _styles: [
                                                    "column"
                                                ],
                                                items: [
                                                    {
                                                        type: "Cloneable",
                                                        value: {
                                                            _styles: [
                                                                "wrapper-clone",
                                                                "wrapper-clone--icon"
                                                            ],
                                                            items: [
                                                                {
                                                                    type: "Icon",
                                                                    value: {
                                                                        _styles: [
                                                                            "icon"
                                                                        ],
                                                                        name: "map-pin",
                                                                        type: "outline"
                                                                    }
                                                                }
                                                            ]
                                                        }
                                                    },
                                                    {
                                                        type: "Wrapper",
                                                        value: {
                                                            _styles: [
                                                                "wrapper",
                                                                "wrapper--richText"
                                                            ],
                                                            items: [
                                                                {
                                                                    type: "RichText",
                                                                    value: {
                                                                        _styles: [
                                                                            "richText"
                                                                        ],
                                                                        text: "<p class=\"brz-tp-heading4 brz-text-lg-center brz-fs-xs-25\"><span class=\"brz-cp-color1\">Address</span></p>"
                                                                    }
                                                                }
                                                            ]
                                                        }
                                                    },
                                                    {
                                                        type: "Wrapper",
                                                        value: {
                                                            _styles: [
                                                                "wrapper",
                                                                "wrapper--richText"
                                                            ],
                                                            items: [
                                                                {
                                                                    type: "RichText",
                                                                    value: {
                                                                        _styles: [
                                                                            "richText"
                                                                        ],
                                                                        text: "<p class=\"brz-text-lg-center brz-tp-paragraph brz-fs-xs-17\"><span class=\"brz-cp-color4\">New York City,</span></p><p class=\"brz-tp-paragraph brz-text-lg-center brz-fs-xs-17\"><span class=\"brz-cp-color4\">68 Beaver Ridge Court Suite 3&nbsp;</span></p><p class=\"brz-text-lg-center brz-tp-paragraph brz-fs-xs-17\"><span class=\"brz-cp-color4\">Bozeman, MT 59715</span></p>"
                                                                    }
                                                                }
                                                            ]
                                                        }
                                                    }
                                                ],
                                                width: 33.3,
                                                borderWidthType: "ungrouped",
                                                borderRightWidth: 1,
                                                tempBorderRightWidth: 1,
                                                tempBorderLeftWidth: 0,
                                                tempBorderBottomWidth: 0,
                                                tempBorderTopWidth: 0,
                                                borderColorOpacity: 1,
                                                borderColorPalette: "color5",
                                                borderColorHex: "",
                                                mobilePaddingRight: 10,
                                                mobilePaddingLeft: 10
                                            }
                                        },
                                        {
                                            type: "Column",
                                            value: {
                                                _styles: [
                                                    "column"
                                                ],
                                                items: [
                                                    {
                                                        type: "Cloneable",
                                                        value: {
                                                            _styles: [
                                                                "wrapper-clone",
                                                                "wrapper-clone--icon"
                                                            ],
                                                            items: [
                                                                {
                                                                    type: "Icon",
                                                                    value: {
                                                                        _styles: [
                                                                            "icon"
                                                                        ],
                                                                        name: "time-clock",
                                                                        type: "outline"
                                                                    }
                                                                }
                                                            ]
                                                        }
                                                    },
                                                    {
                                                        type: "Wrapper",
                                                        value: {
                                                            _styles: [
                                                                "wrapper",
                                                                "wrapper--richText"
                                                            ],
                                                            items: [
                                                                {
                                                                    type: "RichText",
                                                                    value: {
                                                                        _styles: [
                                                                            "richText"
                                                                        ],
                                                                        text: "<p class=\"brz-tp-heading4 brz-text-lg-center brz-fs-xs-25\"><span class=\"brz-cp-color1\">Schedule</span></p>"
                                                                    }
                                                                }
                                                            ]
                                                        }
                                                    },
                                                    {
                                                        type: "Wrapper",
                                                        value: {
                                                            _styles: [
                                                                "wrapper",
                                                                "wrapper--richText"
                                                            ],
                                                            items: [
                                                                {
                                                                    type: "RichText",
                                                                    value: {
                                                                        _styles: [
                                                                            "richText"
                                                                        ],
                                                                        text: "<p class=\"brz-text-lg-center brz-tp-paragraph brz-fs-xs-17\"><span class=\"brz-cp-color4\">M-T: 08:00 - 17:00</span></p><p class=\"brz-text-lg-center brz-tp-paragraph brz-fs-xs-17\"><span class=\"brz-cp-color4\">F: 08:00 - 15:00</span></p><p class=\"brz-text-lg-center brz-tp-paragraph brz-fs-xs-17\"><span class=\"brz-cp-color4\">S: 08:00 - 13:00</span></p>"
                                                                    }
                                                                }
                                                            ]
                                                        }
                                                    }
                                                ],
                                                width: 33.4
                                            }
                                        }
                                    ]
                                }
                            },
                            {
                                type: "Wrapper",
                                value: {
                                    _styles: [
                                        "wrapper",
                                        "wrapper--spacer"
                                    ],
                                    items: [
                                        {
                                            type: "Spacer",
                                            value: {
                                                _styles: [
                                                    "spacer"
                                                ]
                                            }
                                        }
                                    ]
                                }
                            },
                            {
                                type: "Row",
                                value: {
                                    _styles: [
                                        "row",
                                        "hide-row-borders",
                                        "padding-0"
                                    ],
                                    items: [
                                        {
                                            type: "Column",
                                            value: {
                                                _styles: [
                                                    "column"
                                                ],
                                                items: [
                                                    {
                                                        type: "Wrapper",
                                                        value: {
                                                            _styles: [
                                                                "wrapper",
                                                                "wrapper--line"
                                                            ],
                                                            items: [
                                                                {
                                                                    type: "Line",
                                                                    value: {
                                                                        _styles: [
                                                                            "line"
                                                                        ],
                                                                        width: 100,
                                                                        borderWidth: 3,
                                                                        borderColorPalette: "color5",
                                                                        borderColorHex: "#0d91bb",
                                                                        borderColorOpacity: 1
                                                                    }
                                                                }
                                                            ]
                                                        }
                                                    }
                                                ],
                                                paddingRight: 0,
                                                paddingLeft: 0,
                                                showOnMobile: "off",
                                                width: 50
                                            }
                                        },
                                        {
                                            type: "Column",
                                            value: {
                                                _styles: [
                                                    "column"
                                                ],
                                                items: [
                                                    {
                                                        type: "Wrapper",
                                                        value: {
                                                            _styles: [
                                                                "wrapper",
                                                                "wrapper--line"
                                                            ],
                                                            items: [
                                                                {
                                                                    type: "Line",
                                                                    value: {
                                                                        _styles: [
                                                                            "line"
                                                                        ],
                                                                        width: 100,
                                                                        borderWidth: 3,
                                                                        borderColorPalette: "color3",
                                                                        borderColorHex: "#0d91bb",
                                                                        borderColorOpacity: 1
                                                                    }
                                                                }
                                                            ]
                                                        }
                                                    }
                                                ],
                                                paddingRight: 0,
                                                paddingLeft: 0,
                                                width: 50
                                            }
                                        }
                                    ]
                                }
                            }
                        ],
                        padding: 0,
                        paddingTop: 20,
                        paddingBottom: 80,
                        paddingType: "ungrouped"
                    }
                }
            ]
        }
    },
    {
        blockId: "Bogdan016Light",
        type: "Section",
        value: {
            _styles: [
                "section"
            ],
            items: [
                {
                    type: "SectionItem",
                    value: {
                        _styles: [
                            "section-item"
                        ],
                        bgColorHex: "#ffffff",
                        bgColorOpacity: 1,
                        items: [
                            {
                                type: "Wrapper",
                                value: {
                                    _styles: [
                                        "wrapper",
                                        "wrapper--map"
                                    ],
                                    items: [
                                        {
                                            type: "Map",
                                            value: {
                                                _styles: [
                                                    "map"
                                                ],
                                                height: 530,
                                                address: "manhattan"
                                            }
                                        }
                                    ]
                                }
                            }
                        ],
                        containerSize: 80,
                        containerType: "fullWidth",
                        paddingType: "ungrouped",
                        paddingTop: 30,
                        paddingBottom: 40
                    }
                }
            ]
        }
    }
]}
};