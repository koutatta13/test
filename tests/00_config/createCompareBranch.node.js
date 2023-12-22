// example.mjs
const simpleGit = require('simple-git');
const branch = require('git-branch');
const exec = require('child_process').exec;
var name = "";
console.log("-------------")
console.log("-------------")
console.log("-------------")
console.log("-------------")
console.log(process.argv[2])
init();
function init(){
    exec('gulp', (err, stdout, stderr) => {
        if (err) { console.log(err); }
        console.log(stdout);
    });
    branch()
        .then(name => startTest(name)) //=> 'master'
        .catch(console.error);
}



async function startTest(name) {
    var res=false;
    var c=0;
    simpleGit().deleteLocalBranch(`test/old-master`, true)
    console.log("delete    |test/old-master");
    simpleGit().checkoutLocalBranch(`test/old-master`);
    while(res==false){
        res=await isBranchName(`test/old-master`);
        if(c>20){
            simpleGit().checkoutLocalBranch(`test/old-master`);
        }
        if(c>40){
            simpleGit().deleteLocalBranch(`test/old-master`, true)
            c=0;
        }
    }
    console.log("checkout  |test/old-master");
    console.log("await OK? |"+res);
    res=false;
    simpleGit().reset("hard", { process.argv[2] : null })
    console.log("create    |oldBranch")
    exec('npx playwright test --update-snapshots ', (err, stdout, stderr) => {
        if (err) { console.log(err); }
        console.log(stdout);
    });
    console.log("update    |snapshot")
    simpleGit().checkout(name);
    while(res==false){
        res=await isBranchName(name);
    }
    console.log("checkout  |"+name);
    console.log("await OK? |"+res);
    res=false;
    exec('npx playwright test', (err, stdout, stderr) => {
        if (err) { console.log(err); }
        console.log(stdout);
    });
    
    simpleGit().deleteLocalBranch(`test/old-master`,true)

    console.log("delete    |test/old-master")
    console.log("close     |end test")
    setTimeout(()=>process.exit(0),10000);
}
// simpleGit().checkoutLocalBranch(`test/old-master`);
// simpleGit().checkout(`feature/compare_commit`);
// test();
//simpleGit().checkoutLocalBranch(`test/old-master`);
// async function test(target){
// console.log("1");
// var res=false;
// while(res==false){
// res=await isBranchName("feature/compare_commit");
// console.log(res)
// }
// console.log("2");
// }


//非同期
function isBranchName(target) {
    return new Promise(resolve => {
        setTimeout(()=>{
    branch()
        .then(getCurrent => {
            console.log(getCurrent)
            console.log(target)
            if (getCurrent == target) {
                flag=1;
                flag2=2;
                resolve(true);
            } else {
                resolve(false);
            }
        }) //=> 'master'
        .catch(() => {
            console.log("---------------------")
            console.log("無限ループ createCompareBranch.node.js");
            console.log("---------------------");
            process.exit(-1);
        });
    },1000);
    });
}


// return new Promise(resolve => {
//     setTimeout(() => {
//       resolve(1)
//     }, 2000)
//   })