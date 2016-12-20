/**
 * Created by dell on 2016/12/20.
 * author:马星
 * time:16-12-20
 */
//检测邮箱格式
function emailCheck (femail) {
    var regemail=/^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*(;\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*)*$/;
    if(femail.match(regemail)){
        //正确
        return 1;
    }
    else{
       //错误
        return 0;
    }
}
//手机和电话的验证
function phoneCheck(chr){
    max=/^[1][34578][0-9]{9}$/;
    if(chr.match(max)){
            return 1;
    }else{
            return 0;
    }

}