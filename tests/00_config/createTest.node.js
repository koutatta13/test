const fs = require('fs');
const json = JSON.parse(fs.readFileSync('./tests/00_config/testsList.json', 'utf8'));
const testCaseLength=Object.keys(json).length;
const host="http://localhost:3000";
for(i=0;i<testCaseLength;i++){ //loop testCase
    const template=fs.readFileSync('./tests/01_template/'+Object.keys(json)[i]+'.template.js', 'utf8');
    var testStr="const { test, expect } = require('@playwright/test');";
    urlsValidation(json[Object.keys(json)[i]].urls);
        for(j=0;j<json[Object.keys(json)[i]].urls.length;j++){
            var cp_template=template;
            replaceUrl= json[Object.keys(json)[i]].urls[j].replace( /\//g , "_" ) ;
            console.log(replaceUrl+"replaceURL")
            if(replaceUrl.slice( -1 )==="_"){replaceUrl.slice(0, replaceUrl.length - 1);} ;
            cp_template=cp_template.replace("rp_url",json[Object.keys(json)[i]].urls[j]).replace("rp_replaceUrl",replaceUrl).replace("rp_testCase",Object.keys(json)[i]).replace("rp_host",host);
            //console.log(cp_template)
            testStr=testStr+cp_template;
        }
    
    fs.writeFileSync("./tests/02_tests/"+Object.keys(json)[i]+".spec.js", testStr);
    //fs.writeFileSync("test.spec.js", "aaaa");
}
function urlsValidation(strArray){
    var cont=0;
    for(cont=0;cont<strArray.length;cont++){
        // strArray[cont] = strArray[cont].replace( /\//g , "_" ) ;
        if(strArray[cont].slice( -1 )==="/"){strArray[cont].slice(0, str.length - 1);} ;
    }
    if(isDuplicated(strArray)){
        //被る
        errStr("urls内に重複があります")
    }
    return strArray;
}
function isDuplicated(elements) {
    // Setを使って、配列の要素を一意にする
    const setElements = new Set(elements);
    return setElements.size !== elements.length;
  }
function errStr(errorText){
    console.log("---------------------");
    console.log(errorText);
    console.log("---------------------");
    process.exit(-1);
}