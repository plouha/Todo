var classes = [
    {
        "name": "AppBundle\\Handler\\Handler",
        "interface": false,
        "abstract": true,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getFormType",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "process",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "handle",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getForm",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 5,
        "nbMethods": 4,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 4,
        "nbMethodsGetter": 1,
        "nbMethodsSetters": 0,
        "wmc": 7,
        "ccn": 3,
        "ccnMethodMax": 3,
        "externals": [
            "Symfony\\Component\\Form\\FormFactoryInterface",
            "Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBagInterface",
            "Doctrine\\ORM\\EntityManagerInterface",
            "Symfony\\Component\\HttpFoundation\\Request"
        ],
        "parents": [],
        "lcom": 1,
        "length": 31,
        "vocabulary": 10,
        "volume": 102.98,
        "difficulty": 7.33,
        "effort": 755.18,
        "level": 0.14,
        "bugs": 0.03,
        "time": 42,
        "intelligentContent": 14.04,
        "number_operators": 9,
        "number_operands": 22,
        "number_operators_unique": 4,
        "number_operands_unique": 6,
        "cloc": 13,
        "loc": 42,
        "lloc": 29,
        "mi": 91.56,
        "mIwoC": 53.6,
        "commentWeight": 37.95,
        "kanDefect": 0.22,
        "relativeStructuralComplexity": 36,
        "relativeDataComplexity": 0.6,
        "relativeSystemComplexity": 36.6,
        "totalStructuralComplexity": 180,
        "totalDataComplexity": 3,
        "totalSystemComplexity": 183,
        "package": "AppBundle\\Handler\\",
        "pageRank": 0.11,
        "afferentCoupling": 2,
        "efferentCoupling": 4,
        "instability": 0.67,
        "violations": {}
    },
    {
        "name": "AppBundle\\Handler\\AddTaskHandler",
        "interface": false,
        "abstract": false,
        "methods": [
            {
                "name": "getFormType",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "process",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 2,
        "nbMethods": 2,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 2,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 2,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [
            "AppBundle\\Handler\\Handler"
        ],
        "parents": [
            "AppBundle\\Handler\\Handler"
        ],
        "lcom": 2,
        "length": 8,
        "vocabulary": 5,
        "volume": 18.58,
        "difficulty": 0.88,
        "effort": 16.25,
        "level": 1.14,
        "bugs": 0.01,
        "time": 1,
        "intelligentContent": 21.23,
        "number_operators": 1,
        "number_operands": 7,
        "number_operators_unique": 1,
        "number_operands_unique": 4,
        "cloc": 12,
        "loc": 26,
        "lloc": 14,
        "mi": 109.41,
        "mIwoC": 65.98,
        "commentWeight": 43.43,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 9,
        "relativeDataComplexity": 0.38,
        "relativeSystemComplexity": 9.38,
        "totalStructuralComplexity": 18,
        "totalDataComplexity": 0.75,
        "totalSystemComplexity": 18.75,
        "package": "AppBundle\\Handler\\",
        "pageRank": 0.02,
        "afferentCoupling": 1,
        "efferentCoupling": 1,
        "instability": 0.5,
        "violations": {}
    },
    {
        "name": "AppBundle\\Handler\\EditTaskHandler",
        "interface": false,
        "abstract": false,
        "methods": [
            {
                "name": "getFormType",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "process",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 2,
        "nbMethods": 2,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 2,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 2,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [
            "AppBundle\\Handler\\Handler"
        ],
        "parents": [
            "AppBundle\\Handler\\Handler"
        ],
        "lcom": 2,
        "length": 6,
        "vocabulary": 5,
        "volume": 13.93,
        "difficulty": 0.63,
        "effort": 8.71,
        "level": 1.6,
        "bugs": 0,
        "time": 0,
        "intelligentContent": 22.29,
        "number_operators": 1,
        "number_operands": 5,
        "number_operators_unique": 1,
        "number_operands_unique": 4,
        "cloc": 12,
        "loc": 25,
        "lloc": 13,
        "mi": 111.5,
        "mIwoC": 67.56,
        "commentWeight": 43.94,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 4,
        "relativeDataComplexity": 0.5,
        "relativeSystemComplexity": 4.5,
        "totalStructuralComplexity": 8,
        "totalDataComplexity": 1,
        "totalSystemComplexity": 9,
        "package": "AppBundle\\Handler\\",
        "pageRank": 0.02,
        "afferentCoupling": 1,
        "efferentCoupling": 1,
        "instability": 0.5,
        "violations": {}
    },
    {
        "name": "AppBundle\\Form\\TaskType",
        "interface": false,
        "abstract": false,
        "methods": [
            {
                "name": "buildForm",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 1,
        "nbMethods": 1,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 1,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 1,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [
            "Symfony\\Component\\Form\\AbstractType",
            "Symfony\\Component\\Form\\FormBuilderInterface"
        ],
        "parents": [
            "Symfony\\Component\\Form\\AbstractType"
        ],
        "lcom": 1,
        "length": 5,
        "vocabulary": 4,
        "volume": 10,
        "difficulty": 0,
        "effort": 0,
        "level": 1.6,
        "bugs": 0,
        "time": 0,
        "intelligentContent": 16,
        "number_operators": 0,
        "number_operands": 5,
        "number_operators_unique": 0,
        "number_operands_unique": 4,
        "cloc": 8,
        "loc": 16,
        "lloc": 8,
        "mi": 117.62,
        "mIwoC": 73.16,
        "commentWeight": 44.46,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 1,
        "relativeDataComplexity": 1,
        "relativeSystemComplexity": 2,
        "totalStructuralComplexity": 1,
        "totalDataComplexity": 1,
        "totalSystemComplexity": 2,
        "package": "AppBundle\\Form\\",
        "pageRank": 0.02,
        "afferentCoupling": 0,
        "efferentCoupling": 2,
        "instability": 1,
        "violations": {}
    },
    {
        "name": "AppBundle\\Form\\UserType",
        "interface": false,
        "abstract": false,
        "methods": [
            {
                "name": "buildForm",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 1,
        "nbMethods": 1,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 1,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 1,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [
            "Symfony\\Component\\Form\\AbstractType",
            "Symfony\\Component\\Form\\FormBuilderInterface"
        ],
        "parents": [
            "Symfony\\Component\\Form\\AbstractType"
        ],
        "lcom": 1,
        "length": 20,
        "vocabulary": 16,
        "volume": 80,
        "difficulty": 0,
        "effort": 0,
        "level": 1.6,
        "bugs": 0.03,
        "time": 0,
        "intelligentContent": 128,
        "number_operators": 0,
        "number_operands": 20,
        "number_operators_unique": 0,
        "number_operands_unique": 16,
        "cloc": 8,
        "loc": 16,
        "lloc": 8,
        "mi": 111.3,
        "mIwoC": 66.84,
        "commentWeight": 44.46,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 1,
        "relativeDataComplexity": 1,
        "relativeSystemComplexity": 2,
        "totalStructuralComplexity": 1,
        "totalDataComplexity": 1,
        "totalSystemComplexity": 2,
        "package": "AppBundle\\Form\\",
        "pageRank": 0.02,
        "afferentCoupling": 0,
        "efferentCoupling": 2,
        "instability": 1,
        "violations": {}
    },
    {
        "name": "AppBundle\\Security\\Voter\\TaskVoter",
        "interface": false,
        "abstract": false,
        "methods": [
            {
                "name": "supports",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "voteOnAttribute",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 2,
        "nbMethods": 2,
        "nbMethodsPrivate": 2,
        "nbMethodsPublic": 0,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 4,
        "ccn": 3,
        "ccnMethodMax": 2,
        "externals": [
            "Symfony\\Component\\Security\\Core\\Authorization\\Voter\\Voter",
            "Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface"
        ],
        "parents": [
            "Symfony\\Component\\Security\\Core\\Authorization\\Voter\\Voter"
        ],
        "lcom": 2,
        "length": 19,
        "vocabulary": 8,
        "volume": 57,
        "difficulty": 3.6,
        "effort": 205.2,
        "level": 0.28,
        "bugs": 0.02,
        "time": 11,
        "intelligentContent": 15.83,
        "number_operators": 7,
        "number_operands": 12,
        "number_operators_unique": 3,
        "number_operands_unique": 5,
        "cloc": 18,
        "loc": 36,
        "lloc": 18,
        "mi": 104.38,
        "mIwoC": 59.92,
        "commentWeight": 44.46,
        "kanDefect": 0.29,
        "relativeStructuralComplexity": 1,
        "relativeDataComplexity": 3.25,
        "relativeSystemComplexity": 4.25,
        "totalStructuralComplexity": 2,
        "totalDataComplexity": 6.5,
        "totalSystemComplexity": 8.5,
        "package": "AppBundle\\Security\\Voter\\",
        "pageRank": 0.02,
        "afferentCoupling": 0,
        "efferentCoupling": 2,
        "instability": 1,
        "violations": {}
    },
    {
        "name": "AppBundle\\Entity\\User",
        "interface": false,
        "abstract": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getId",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getUsername",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setUsername",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getSalt",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getPassword",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setPassword",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getEmail",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setEmail",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getRoles",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "eraseCredentials",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTasks",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTask",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setRoles",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 14,
        "nbMethods": 5,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 5,
        "nbMethodsGetter": 5,
        "nbMethodsSetters": 4,
        "wmc": 14,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [
            "Symfony\\Component\\Security\\Core\\User\\UserInterface",
            "AppBundle\\Entity\\Task"
        ],
        "parents": [],
        "lcom": 3,
        "length": 40,
        "vocabulary": 10,
        "volume": 132.88,
        "difficulty": 3.25,
        "effort": 431.85,
        "level": 0.31,
        "bugs": 0.04,
        "time": 24,
        "intelligentContent": 40.89,
        "number_operators": 14,
        "number_operands": 26,
        "number_operators_unique": 2,
        "number_operands_unique": 8,
        "cloc": 104,
        "loc": 171,
        "lloc": 67,
        "mi": 91.91,
        "mIwoC": 45.16,
        "commentWeight": 46.75,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 1,
        "relativeDataComplexity": 4.18,
        "relativeSystemComplexity": 5.18,
        "totalStructuralComplexity": 14,
        "totalDataComplexity": 58.5,
        "totalSystemComplexity": 72.5,
        "package": "AppBundle\\Entity\\",
        "pageRank": 0.32,
        "afferentCoupling": 3,
        "efferentCoupling": 2,
        "instability": 0.4,
        "violations": {}
    },
    {
        "name": "AppBundle\\Entity\\Task",
        "interface": false,
        "abstract": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getId",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getCreatedAt",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setCreatedAt",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTitle",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTitle",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getContent",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setContent",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "isDone",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "toggle",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getUser",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setUser",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setIsDone",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 13,
        "nbMethods": 2,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 2,
        "nbMethodsGetter": 6,
        "nbMethodsSetters": 5,
        "wmc": 13,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [
            "Datetime",
            "AppBundle\\Entity\\User"
        ],
        "parents": [],
        "lcom": 1,
        "length": 44,
        "vocabulary": 9,
        "volume": 139.48,
        "difficulty": 4,
        "effort": 557.91,
        "level": 0.25,
        "bugs": 0.05,
        "time": 31,
        "intelligentContent": 34.87,
        "number_operators": 16,
        "number_operands": 28,
        "number_operators_unique": 2,
        "number_operands_unique": 7,
        "cloc": 92,
        "loc": 157,
        "lloc": 65,
        "mi": 91.64,
        "mIwoC": 45.3,
        "commentWeight": 46.34,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 0,
        "relativeDataComplexity": 8.46,
        "relativeSystemComplexity": 8.46,
        "totalStructuralComplexity": 0,
        "totalDataComplexity": 110,
        "totalSystemComplexity": 110,
        "package": "AppBundle\\Entity\\",
        "pageRank": 0.32,
        "afferentCoupling": 3,
        "efferentCoupling": 2,
        "instability": 0.4,
        "violations": {}
    },
    {
        "name": "AppBundle\\AppBundle",
        "interface": false,
        "abstract": false,
        "methods": [],
        "nbMethodsIncludingGettersSetters": 0,
        "nbMethods": 0,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 0,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 0,
        "ccn": 1,
        "ccnMethodMax": 0,
        "externals": [
            "Symfony\\Component\\HttpKernel\\Bundle\\Bundle"
        ],
        "parents": [
            "Symfony\\Component\\HttpKernel\\Bundle\\Bundle"
        ],
        "lcom": 0,
        "length": 0,
        "vocabulary": 0,
        "volume": 0,
        "difficulty": 0,
        "effort": 0,
        "level": 0,
        "bugs": 0,
        "time": 0,
        "intelligentContent": 0,
        "number_operators": 0,
        "number_operands": 0,
        "number_operators_unique": 0,
        "number_operands_unique": 0,
        "cloc": 0,
        "loc": 4,
        "lloc": 4,
        "mi": 171,
        "mIwoC": 171,
        "commentWeight": 0,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 0,
        "relativeDataComplexity": 0,
        "relativeSystemComplexity": 0,
        "totalStructuralComplexity": 0,
        "totalDataComplexity": 0,
        "totalSystemComplexity": 0,
        "package": "AppBundle\\",
        "pageRank": 0.02,
        "afferentCoupling": 0,
        "efferentCoupling": 1,
        "instability": 1,
        "violations": {}
    },
    {
        "name": "AppBundle\\DataFixtures\\ORM\\UserFixtures",
        "interface": false,
        "abstract": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "load",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 2,
        "nbMethods": 2,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 2,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 5,
        "ccn": 4,
        "ccnMethodMax": 4,
        "externals": [
            "Doctrine\\Bundle\\FixturesBundle\\Fixture",
            "Symfony\\Component\\Security\\Core\\Encoder\\UserPasswordEncoderInterface",
            "Doctrine\\Common\\Persistence\\ObjectManager",
            "AppBundle\\Entity\\User",
            "AppBundle\\Entity\\Task",
            "DateTime",
            "AppBundle\\Entity\\User",
            "AppBundle\\Entity\\Task",
            "DateTime",
            "AppBundle\\Entity\\User",
            "AppBundle\\Entity\\Task",
            "DateTime",
            "AppBundle\\Entity\\User"
        ],
        "parents": [
            "Doctrine\\Bundle\\FixturesBundle\\Fixture"
        ],
        "lcom": 1,
        "length": 137,
        "vocabulary": 29,
        "volume": 665.54,
        "difficulty": 9.04,
        "effort": 6016.51,
        "level": 0.11,
        "bugs": 0.22,
        "time": 334,
        "intelligentContent": 73.62,
        "number_operators": 24,
        "number_operands": 113,
        "number_operators_unique": 4,
        "number_operands_unique": 25,
        "cloc": 39,
        "loc": 104,
        "lloc": 65,
        "mi": 80.78,
        "mIwoC": 40.15,
        "commentWeight": 40.63,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 144,
        "relativeDataComplexity": 0.08,
        "relativeSystemComplexity": 144.08,
        "totalStructuralComplexity": 288,
        "totalDataComplexity": 0.15,
        "totalSystemComplexity": 288.15,
        "package": "AppBundle\\DataFixtures\\ORM\\",
        "pageRank": 0.02,
        "afferentCoupling": 0,
        "efferentCoupling": 6,
        "instability": 1,
        "violations": {}
    },
    {
        "name": "AppBundle\\Controller\\DefaultController",
        "interface": false,
        "abstract": false,
        "methods": [
            {
                "name": "indexAction",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 1,
        "nbMethods": 1,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 1,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 1,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController",
            "Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Route"
        ],
        "parents": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController"
        ],
        "lcom": 1,
        "length": 3,
        "vocabulary": 3,
        "volume": 4.75,
        "difficulty": 0.5,
        "effort": 2.38,
        "level": 2,
        "bugs": 0,
        "time": 0,
        "intelligentContent": 9.51,
        "number_operators": 1,
        "number_operands": 2,
        "number_operators_unique": 1,
        "number_operands_unique": 2,
        "cloc": 8,
        "loc": 16,
        "lloc": 8,
        "mi": 119.88,
        "mIwoC": 75.43,
        "commentWeight": 44.46,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 1,
        "relativeDataComplexity": 0.5,
        "relativeSystemComplexity": 1.5,
        "totalStructuralComplexity": 1,
        "totalDataComplexity": 0.5,
        "totalSystemComplexity": 1.5,
        "package": "AppBundle\\Controller\\",
        "pageRank": 0.02,
        "afferentCoupling": 0,
        "efferentCoupling": 2,
        "instability": 1,
        "violations": {}
    },
    {
        "name": "AppBundle\\Controller\\UserController",
        "interface": false,
        "abstract": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "listAction",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "createAction",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "editAction",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "delete",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 5,
        "nbMethods": 5,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 5,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 8,
        "ccn": 4,
        "ccnMethodMax": 2,
        "externals": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController",
            "Symfony\\Component\\Security\\Core\\Encoder\\UserPasswordEncoderInterface",
            "Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Route",
            "Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Security",
            "Symfony\\Component\\HttpFoundation\\Request",
            "AppBundle\\Entity\\User",
            "Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Route",
            "AppBundle\\Entity\\User",
            "Symfony\\Component\\HttpFoundation\\Request",
            "Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Route",
            "Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Security",
            "AppBundle\\Entity\\User",
            "Symfony\\Component\\HttpFoundation\\Request",
            "Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Route",
            "Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Security"
        ],
        "parents": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController"
        ],
        "lcom": 1,
        "length": 110,
        "vocabulary": 27,
        "volume": 523.04,
        "difficulty": 5.63,
        "effort": 2942.09,
        "level": 0.18,
        "bugs": 0.17,
        "time": 163,
        "intelligentContent": 92.98,
        "number_operators": 20,
        "number_operands": 90,
        "number_operators_unique": 3,
        "number_operands_unique": 24,
        "cloc": 54,
        "loc": 114,
        "lloc": 60,
        "mi": 85.41,
        "mIwoC": 41.64,
        "commentWeight": 43.77,
        "kanDefect": 0.36,
        "relativeStructuralComplexity": 441,
        "relativeDataComplexity": 0.37,
        "relativeSystemComplexity": 441.37,
        "totalStructuralComplexity": 2205,
        "totalDataComplexity": 1.86,
        "totalSystemComplexity": 2206.86,
        "package": "AppBundle\\Controller\\",
        "pageRank": 0.02,
        "afferentCoupling": 0,
        "efferentCoupling": 6,
        "instability": 1,
        "violations": {}
    },
    {
        "name": "AppBundle\\Controller\\SecurityController",
        "interface": false,
        "abstract": false,
        "methods": [
            {
                "name": "loginAction",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "logout",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 2,
        "nbMethods": 2,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 2,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 2,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\Controller",
            "Symfony\\Component\\HttpFoundation\\Request",
            "Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Route",
            "Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Route"
        ],
        "parents": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\Controller"
        ],
        "lcom": 2,
        "length": 18,
        "vocabulary": 10,
        "volume": 59.79,
        "difficulty": 1.75,
        "effort": 104.64,
        "level": 0.57,
        "bugs": 0.02,
        "time": 6,
        "intelligentContent": 34.17,
        "number_operators": 4,
        "number_operands": 14,
        "number_operators_unique": 2,
        "number_operands_unique": 8,
        "cloc": 16,
        "loc": 30,
        "lloc": 14,
        "mi": 107.67,
        "mIwoC": 62.42,
        "commentWeight": 45.25,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 16,
        "relativeDataComplexity": 0.3,
        "relativeSystemComplexity": 16.3,
        "totalStructuralComplexity": 32,
        "totalDataComplexity": 0.6,
        "totalSystemComplexity": 32.6,
        "package": "AppBundle\\Controller\\",
        "pageRank": 0.02,
        "afferentCoupling": 0,
        "efferentCoupling": 3,
        "instability": 1,
        "violations": {}
    },
    {
        "name": "AppBundle\\Controller\\TaskController",
        "interface": false,
        "abstract": false,
        "methods": [
            {
                "name": "listAction",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "listDoneAction",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "createAction",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "editAction",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "toggleTaskAction",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "deleteTaskAction",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 6,
        "nbMethods": 6,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 6,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 8,
        "ccn": 3,
        "ccnMethodMax": 2,
        "externals": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController",
            "Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Route",
            "Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Security",
            "Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Route",
            "Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Security",
            "Symfony\\Component\\HttpFoundation\\Request",
            "AppBundle\\Handler\\AddTaskHandler",
            "AppBundle\\Entity\\Task",
            "Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Route",
            "Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Security",
            "AppBundle\\Entity\\Task",
            "Symfony\\Component\\HttpFoundation\\Request",
            "AppBundle\\Handler\\EditTaskHandler",
            "Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Route",
            "Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Security",
            "AppBundle\\Entity\\Task",
            "Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Route",
            "Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Security",
            "AppBundle\\Entity\\Task",
            "Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Route",
            "Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Security"
        ],
        "parents": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController"
        ],
        "lcom": 1,
        "length": 108,
        "vocabulary": 28,
        "volume": 519.19,
        "difficulty": 5.4,
        "effort": 2803.65,
        "level": 0.19,
        "bugs": 0.17,
        "time": 156,
        "intelligentContent": 96.15,
        "number_operators": 18,
        "number_operands": 90,
        "number_operators_unique": 3,
        "number_operands_unique": 25,
        "cloc": 48,
        "loc": 100,
        "lloc": 52,
        "mi": 87.09,
        "mIwoC": 43.15,
        "commentWeight": 43.94,
        "kanDefect": 0.29,
        "relativeStructuralComplexity": 361,
        "relativeDataComplexity": 0.46,
        "relativeSystemComplexity": 361.46,
        "totalStructuralComplexity": 2166,
        "totalDataComplexity": 2.75,
        "totalSystemComplexity": 2168.75,
        "package": "AppBundle\\Controller\\",
        "pageRank": 0.02,
        "afferentCoupling": 0,
        "efferentCoupling": 7,
        "instability": 1,
        "violations": {}
    }
]