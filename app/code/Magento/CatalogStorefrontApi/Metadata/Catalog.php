<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: catalog.proto

namespace Magento\CatalogStorefrontApi\Metadata;

class Catalog
{
    public static $is_initialized = false;

    public static function initOnce()
    {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
            return;
        }
        $pool->internalAddGeneratedFile(hex2bin(
            "0a83430a0d636174616c6f672e70726f746f12226d6167656e746f2e6361" .
            "74616c6f6753746f726566726f6e744170692e70726f746f22c60e0a0750" .
            "726f64756374120a0a02696418012001280912180a106174747269627574" .
            "655f7365745f696418022001280912130a0b6861735f6f7074696f6e7318" .
            "032001280812120a0a637265617465645f617418052001280912120a0a75" .
            "7064617465645f6174180620012809120b0a03736b75180720012809120f" .
            "0a07747970655f6964180820012809120e0a067374617475731809200128" .
            "0912140a0c73746f636b5f737461747573180a20012809120c0a046e616d" .
            "6518112001280912130a0b6465736372697074696f6e1812200128091219" .
            "0a1173686f72745f6465736372697074696f6e181320012809120f0a0775" .
            "726c5f6b6579181420012809120b0a03717479181b2001280212140a0c74" .
            "61785f636c6173735f6964181c20012809120e0a06776569676874181d20" .
            "01280212380a05696d616765181f2001280b32292e6d6167656e746f2e63" .
            "6174616c6f6753746f726566726f6e744170692e70726f746f2e496d6167" .
            "65123e0a0b736d616c6c5f696d61676518202001280b32292e6d6167656e" .
            "746f2e636174616c6f6753746f726566726f6e744170692e70726f746f2e" .
            "496d616765123c0a097468756d626e61696c18212001280b32292e6d6167" .
            "656e746f2e636174616c6f6753746f726566726f6e744170692e70726f74" .
            "6f2e496d61676512140a0c7377617463685f696d61676518222001280912" .
            "4b0a0d6d656469615f67616c6c65727918232003280b32342e6d6167656e" .
            "746f2e636174616c6f6753746f726566726f6e744170692e70726f746f2e" .
            "4d6564696147616c6c6572794974656d12120a0a7669736962696c697479" .
            "18252001280912550a1264796e616d69635f617474726962757465731832" .
            "2003280b32392e6d6167656e746f2e636174616c6f6753746f726566726f" .
            "6e744170692e70726f746f2e44796e616d69634174747269627574655661" .
            "6c756512180a106d6574615f6465736372697074696f6e18162001280912" .
            "140a0c6d6574615f6b6579776f726418172001280912120a0a6d6574615f" .
            "7469746c6518182001280912120a0a63617465676f726965731819200328" .
            "0912180a1072657175697265645f6f7074696f6e7318462001280912120a" .
            "0a637265617465645f696e184a2001280912120a0a757064617465645f69" .
            "6e184b2001280912210a197175616e746974795f616e645f73746f636b5f" .
            "737461747573184c2001280912190a116f7074696f6e735f636f6e746169" .
            "6e6572184d2001280912260a1e6d7372705f646973706c61795f61637475" .
            "616c5f70726963655f74797065184e2001280912150a0d69735f72657475" .
            "726e61626c65184f2001280912120a0a75726c5f73756666697818502001" .
            "2809123b0a076f7074696f6e7318512003280b322a2e6d6167656e746f2e" .
            "636174616c6f6753746f726566726f6e744170692e70726f746f2e4f7074" .
            "696f6e12440a0c75726c5f726577726974657318522003280b322e2e6d61" .
            "67656e746f2e636174616c6f6753746f726566726f6e744170692e70726f" .
            "746f2e55726c52657772697465121e0a16636f756e7472795f6f665f6d61" .
            "6e7566616374757265185520012809121e0a16676966745f6d6573736167" .
            "655f617661696c61626c6518562001280812150a0d7370656369616c5f70" .
            "7269636518572001280212190a117370656369616c5f66726f6d5f646174" .
            "6518582001280912170a0f7370656369616c5f746f5f6461746518592001" .
            "280912460a0d70726f647563745f6c696e6b73185a2003280b322f2e6d61" .
            "67656e746f2e636174616c6f6753746f726566726f6e744170692e70726f" .
            "746f2e50726f647563744c696e6b12150a0d63616e6f6e6963616c5f7572" .
            "6c185b2001280912120a0a70726963655f7669657718602001280912220a" .
            "1a6c696e6b735f7075726368617365645f73657061726174656c79186220" .
            "01280812130a0b6c696e6b735f7469746c6518632001280912580a1a646f" .
            "776e6c6f616461626c655f70726f647563745f6c696e6b7318642003280b" .
            "32342e6d6167656e746f2e636174616c6f6753746f726566726f6e744170" .
            "692e70726f746f2e446f776e6c6f616461626c654c696e6b123b0a077361" .
            "6d706c657318652003280b322a2e6d6167656e746f2e636174616c6f6753" .
            "746f726566726f6e744170692e70726f746f2e53616d706c65121c0a146f" .
            "6e6c795f785f6c6566745f696e5f73746f636b18662001280212460a0d67" .
            "726f757065645f6974656d7318672003280b322f2e6d6167656e746f2e63" .
            "6174616c6f6753746f726566726f6e744170692e70726f746f2e47726f75" .
            "7065644974656d124b0a0f70726f647563745f6f7074696f6e7318c70120" .
            "03280b32312e6d6167656e746f2e636174616c6f6753746f726566726f6e" .
            "744170692e70726f746f2e50726f647563744f7074696f6e125d0a157368" .
            "6f707065725f696e7075745f6f7074696f6e7318c8012003280b323d2e6d" .
            "6167656e746f2e636174616c6f6753746f726566726f6e744170692e7072" .
            "6f746f2e50726f6475637453686f70706572496e7075744f7074696f6e22" .
            "460a0e50726f6475637456617269616e74120a0a02696418012001280912" .
            "140a0c6f7074696f6e5f76616c756518022003280912120a0a70726f6475" .
            "63745f696418032001280922380a1450726f6475637456617269616e7449" .
            "6d706f7274120a0a02696418012001280912140a0c6f7074696f6e5f7661" .
            "6c756518022003280922420a05507269636512150a0d726567756c61725f" .
            "707269636518012001280212130a0b66696e616c5f707269636518022001" .
            "2802120d0a0573636f7065180320012809229e010a1250726f647563744f" .
            "7074696f6e56616c7565120a0a026964180120012809120d0a056c616265" .
            "6c18022001280912120a0a736f72745f6f72646572180320012809120f0a" .
            "0764656661756c7418042001280812110a09696d6167655f75726c180520" .
            "01280912160a0e7174795f6d75746162696c697479180620012808120b0a" .
            "0371747918072001280212100a08696e666f5f75726c18082001280922bb" .
            "010a0d50726f647563744f7074696f6e120a0a026964180120012809120d" .
            "0a056c6162656c18022001280912120a0a736f72745f6f72646572180320" .
            "01280512100a08726571756972656418042001280812130a0b72656e6465" .
            "725f74797065180520012809120c0a047479706518062001280912460a06" .
            "76616c75657318072003280b32362e6d6167656e746f2e636174616c6f67" .
            "53746f726566726f6e744170692e70726f746f2e50726f647563744f7074" .
            "696f6e56616c75652296020a1950726f6475637453686f70706572496e70" .
            "75744f7074696f6e120a0a026964180120012809120d0a056c6162656c18" .
            "022001280912120a0a736f72745f6f7264657218032001280512100a0872" .
            "6571756972656418042001280812130a0b72656e6465725f747970651805" .
            "2001280912380a05707269636518062003280b32292e6d6167656e746f2e" .
            "636174616c6f6753746f726566726f6e744170692e70726f746f2e507269" .
            "6365120d0a0576616c756518072001280912160a0e6d61785f6368617261" .
            "637465727318082001280512160a0e66696c655f657874656e73696f6e18" .
            "092003280912140a0c696d6167655f73697a655f78180a2001280512140a" .
            "0c696d6167655f73697a655f79180b2001280522ec010a10446f776e6c6f" .
            "616461626c654c696e6b12120a0a73616d706c655f75726c180120012809" .
            "120d0a057469746c6518022001280912120a0a736f72745f6f7264657218" .
            "032001280512130a0b73616d706c655f7479706518042001280912130a0b" .
            "73616d706c655f66696c65180520012809120f0a076c696e6b5f69641806" .
            "20012805120d0a05707269636518072001280212110a096c696e6b5f7479" .
            "706518082001280912140a0c69735f736861726561626c65180920012808" .
            "121b0a136e756d6265725f6f665f646f776e6c6f616473180a2001280512" .
            "110a09656e746974795f6964180b2001280922380a0653616d706c65120b" .
            "0a0375726c180120012809120d0a056c6162656c18022001280912120a0a" .
            "736f72745f6f72646572180320012805223d0a0b47726f75706564497465" .
            "6d120b0a0371747918012001280212100a08706f736974696f6e18022001" .
            "2805120f0a0770726f6475637418032001280922b3010a0b50726f647563" .
            "744c696e6b121a0a126c696e6b65645f70726f647563745f736b75180120" .
            "012809120f0a07747970655f6964180220012809121b0a136c696e6b6564" .
            "5f70726f647563745f7479706518032001280912140a0c6c696e6b5f7479" .
            "70655f696418042001280912100a08706f736974696f6e18052001280512" .
            "0b0a03736b7518062001280912120a0a70726f647563745f696418072001" .
            "280912110a096c696e6b5f7479706518082001280922f5030a064f707469" .
            "6f6e12110a096f7074696f6e5f696418012001280912120a0a70726f6475" .
            "63745f6964180220012809120c0a047479706518032001280912120a0a69" .
            "735f72657175697265180420012809120b0a03736b751805200128091216" .
            "0a0e6d61785f6368617261637465727318062001280912160a0e66696c65" .
            "5f657874656e73696f6e18072001280912140a0c696d6167655f73697a65" .
            "5f7818082001280912140a0c696d6167655f73697a655f79180920012809" .
            "12120a0a736f72745f6f72646572180a2001280912150a0d64656661756c" .
            "745f7469746c65180b2001280912130a0b73746f72655f7469746c65180c" .
            "20012809120d0a057469746c65180d2001280912150a0d64656661756c74" .
            "5f7072696365180e20012809121a0a1264656661756c745f70726963655f" .
            "74797065180f2001280912130a0b73746f72655f70726963651810200128" .
            "0912180a1073746f72655f70726963655f74797065181120012809120d0a" .
            "05707269636518122001280912120a0a70726963655f7479706518132001" .
            "280912100a08726571756972656418142001280912130a0b70726f647563" .
            "745f736b75181520012809123e0a0576616c756518162003280b322f2e6d" .
            "6167656e746f2e636174616c6f6753746f726566726f6e744170692e7072" .
            "6f746f2e4f7074696f6e56616c756522ab030a0b4f7074696f6e56616c75" .
            "6512110a096f7074696f6e5f696418012001280912120a0a70726f647563" .
            "745f6964180220012809120c0a047479706518032001280912120a0a6973" .
            "5f72657175697265180420012809120b0a03736b7518052001280912160a" .
            "0e6d61785f6368617261637465727318062001280912160a0e66696c655f" .
            "657874656e73696f6e18072001280912140a0c696d6167655f73697a655f" .
            "7818082001280912140a0c696d6167655f73697a655f7918092001280912" .
            "120a0a736f72745f6f72646572180a2001280912150a0d64656661756c74" .
            "5f7469746c65180b2001280912130a0b73746f72655f7469746c65180c20" .
            "012809120d0a057469746c65180d2001280912150a0d64656661756c745f" .
            "7072696365180e20012809121a0a1264656661756c745f70726963655f74" .
            "797065180f2001280912130a0b73746f72655f7072696365181020012809" .
            "12180a1073746f72655f70726963655f74797065181120012809120d0a05" .
            "707269636518122001280912120a0a70726963655f747970651813200128" .
            "0912160a0e6f7074696f6e5f747970655f696418142001280922660a0a55" .
            "726c52657772697465120b0a0375726c180120012809124b0a0a70617261" .
            "6d657465727318022003280b32372e6d6167656e746f2e636174616c6f67" .
            "53746f726566726f6e744170692e70726f746f2e55726c52657772697465" .
            "506172616d6574657222320a1355726c52657772697465506172616d6574" .
            "6572120c0a046e616d65180120012809120d0a0576616c75651802200128" .
            "0922260a084b657956616c7565120b0a036b6579180120012809120d0a05" .
            "76616c756518022001280922340a1544796e616d69634174747269627574" .
            "6556616c7565120c0a04636f6465180120012809120d0a0576616c756518" .
            "02200128092296010a104d6564696147616c6c6572794974656d120b0a03" .
            "75726c180120012809120d0a056c6162656c18022001280912120a0a6d65" .
            "6469615f7479706518032001280912100a08706f736974696f6e18042001" .
            "280512400a0d766964656f5f636f6e74656e7418052001280b32292e6d61" .
            "67656e746f2e636174616c6f6753746f726566726f6e744170692e70726f" .
            "746f2e566964656f228e010a05566964656f12160a0e766964656f5f7072" .
            "6f766964657218012001280912110a09766964656f5f75726c1802200128" .
            "0912130a0b766964656f5f7469746c6518032001280912190a1176696465" .
            "6f5f6465736372697074696f6e18042001280912160a0e766964656f5f6d" .
            "6574616461746118052001280912120a0a6d656469615f74797065180620" .
            "01280922230a05496d616765120b0a0375726c180120012809120d0a056c" .
            "6162656c18022001280922490a1250726f64756374734765745265717565" .
            "7374120b0a03696473180120032809120d0a0573746f7265180220012809" .
            "12170a0f6174747269627574655f636f646573180320032809224f0a1150" .
            "726f6475637473476574526573756c74123a0a056974656d731801200328" .
            "0b322b2e6d6167656e746f2e636174616c6f6753746f726566726f6e7441" .
            "70692e70726f746f2e50726f6475637422a3010a15496d706f727450726f" .
            "647563747352657175657374123d0a0870726f647563747318012003280b" .
            "322b2e6d6167656e746f2e636174616c6f6753746f726566726f6e744170" .
            "692e70726f746f2e50726f64756374120d0a0573746f7265180220012809" .
            "123c0a06706172616d7318062001280b322c2e6d6167656e746f2e636174" .
            "616c6f6753746f726566726f6e744170692e70726f746f2e4b657956616c" .
            "7565223a0a1544656c65746550726f64756374735265717565737412120a" .
            "0a70726f64756374496473180120032809120d0a0573746f726518022001" .
            "2809223d0a1744656c65746543617465676f726965735265717565737412" .
            "130a0b63617465676f7279496473180120032809120d0a0573746f726518" .
            "0220012809223b0a1844656c65746543617465676f72696573526573706f" .
            "6e7365120e0a06737461747573180120012808120f0a076d657373616765" .
            "18022001280922390a16496d706f727450726f6475637473526573706f6e" .
            "7365120e0a06737461747573180120012808120f0a076d65737361676518" .
            "022001280922390a1644656c65746550726f6475637473526573706f6e73" .
            "65120e0a06737461747573180120012808120f0a076d6573736167651802" .
            "2001280922a8010a17496d706f727443617465676f726965735265717565" .
            "737412400a0a63617465676f7269657318012003280b322c2e6d6167656e" .
            "746f2e636174616c6f6753746f726566726f6e744170692e70726f746f2e" .
            "43617465676f7279120d0a0573746f7265180220012809123c0a06706172" .
            "616d7318062001280b322c2e6d6167656e746f2e636174616c6f6753746f" .
            "726566726f6e744170692e70726f746f2e4b657956616c7565223b0a1849" .
            "6d706f727443617465676f72696573526573706f6e7365120e0a06737461" .
            "747573180120012808120f0a076d65737361676518022001280922ef040a" .
            "0843617465676f7279120a0a026964180120012809120c0a047061746818" .
            "022001280912100a08706f736974696f6e180320012805120d0a056c6576" .
            "656c18042001280512160a0e6368696c6472656e5f636f756e7418052001" .
            "2805120c0a046e616d6518062001280912140a0c646973706c61795f6d6f" .
            "646518072001280912170a0f64656661756c745f736f72745f6279180820" .
            "012809120f0a0775726c5f6b657918092001280912100a0875726c5f7061" .
            "7468180a2001280912110a0969735f616374697665180b2001280812110a" .
            "0969735f616e63686f72180c2001280812170a0f696e636c7564655f696e" .
            "5f6d656e75180d2001280812190a11617661696c61626c655f736f72745f" .
            "6279180e2003280912430a0b62726561646372756d6273180f2003280b32" .
            "2e2e6d6167656e746f2e636174616c6f6753746f726566726f6e74417069" .
            "2e70726f746f2e42726561646372756d6212130a0b646573637269707469" .
            "6f6e18102001280912150a0d63616e6f6e6963616c5f75726c1811200128" .
            "0912150a0d70726f647563745f636f756e7418122001280312100a086368" .
            "696c6472656e181320032809120d0a05696d61676518142001280912110a" .
            "09706172656e745f696418152001280912120a0a6d6574615f7469746c65" .
            "18162001280912180a106d6574615f6465736372697074696f6e18172001" .
            "280912150a0d6d6574615f6b6579776f72647318182001280912550a1264" .
            "796e616d69635f6174747269627574657318322003280b32392e6d616765" .
            "6e746f2e636174616c6f6753746f726566726f6e744170692e70726f746f" .
            "2e44796e616d696341747472696275746556616c75652285010a0a427265" .
            "61646372756d6212130a0b63617465676f72795f69641801200128091215" .
            "0a0d63617465676f72795f6e616d6518022001280912160a0e6361746567" .
            "6f72795f6c6576656c18032001280512180a1063617465676f72795f7572" .
            "6c5f6b657918042001280912190a1163617465676f72795f75726c5f7061" .
            "7468180520012809225a0a1443617465676f726965734765745265717565" .
            "7374120b0a03696473180120032809120d0a056c6576656c180220012805" .
            "120d0a0573746f726518032001280912170a0f6174747269627574655f63" .
            "6f64657318042003280922540a1543617465676f72696573476574526573" .
            "706f6e7365123b0a056974656d7318012003280b322c2e6d6167656e746f" .
            "2e636174616c6f6753746f726566726f6e744170692e70726f746f2e4361" .
            "7465676f727922660a1650726f6475637456617269616e74526573706f6e" .
            "7365124c0a106d6174636865645f76617269616e747318032003280b3232" .
            "2e6d6167656e746f2e636174616c6f6753746f726566726f6e744170692e" .
            "70726f746f2e50726f6475637456617269616e74223a0a1550726f647563" .
            "7456617269616e745265717565737412120a0a70726f647563745f496418" .
            "0120012809120d0a0573746f726518022001280922630a15496d706f7274" .
            "56617269616e747352657175657374124a0a0876617269616e7473180120" .
            "03280b32382e6d6167656e746f2e636174616c6f6753746f726566726f6e" .
            "744170692e70726f746f2e50726f6475637456617269616e74496d706f72" .
            "7422390a16496d706f727456617269616e7473526573706f6e7365120e0a" .
            "06737461747573180120012808120f0a076d657373616765180220012809" .
            "22230a1544656c65746556617269616e747352657175657374120a0a0269" .
            "6418012003280922390a1644656c65746556617269616e7473526573706f" .
            "6e7365120e0a06737461747573180120012808120f0a076d657373616765" .
            "18022001280922370a164f7074696f6e53656c656374696f6e5265717565" .
            "7374120d0a0573746f7265180120012809120e0a0676616c756573180220" .
            "03280932ce060a07436174616c6f67127e0a0b67657450726f6475637473" .
            "12362e6d6167656e746f2e636174616c6f6753746f726566726f6e744170" .
            "692e70726f746f2e50726f6475637473476574526571756573741a352e6d" .
            "6167656e746f2e636174616c6f6753746f726566726f6e744170692e7072" .
            "6f746f2e50726f6475637473476574526573756c7422001289010a0e696d" .
            "706f727450726f647563747312392e6d6167656e746f2e636174616c6f67" .
            "53746f726566726f6e744170692e70726f746f2e496d706f727450726f64" .
            "75637473526571756573741a3a2e6d6167656e746f2e636174616c6f6753" .
            "746f726566726f6e744170692e70726f746f2e496d706f727450726f6475" .
            "637473526573706f6e736522001289010a0e64656c65746550726f647563" .
            "747312392e6d6167656e746f2e636174616c6f6753746f726566726f6e74" .
            "4170692e70726f746f2e44656c65746550726f6475637473526571756573" .
            "741a3a2e6d6167656e746f2e636174616c6f6753746f726566726f6e7441" .
            "70692e70726f746f2e44656c65746550726f6475637473526573706f6e73" .
            "652200128f010a1064656c65746543617465676f72696573123b2e6d6167" .
            "656e746f2e636174616c6f6753746f726566726f6e744170692e70726f74" .
            "6f2e44656c65746543617465676f72696573526571756573741a3c2e6d61" .
            "67656e746f2e636174616c6f6753746f726566726f6e744170692e70726f" .
            "746f2e44656c65746543617465676f72696573526573706f6e7365220012" .
            "8f010a10696d706f727443617465676f72696573123b2e6d6167656e746f" .
            "2e636174616c6f6753746f726566726f6e744170692e70726f746f2e496d" .
            "706f727443617465676f72696573526571756573741a3c2e6d6167656e74" .
            "6f2e636174616c6f6753746f726566726f6e744170692e70726f746f2e49" .
            "6d706f727443617465676f72696573526573706f6e736522001286010a0d" .
            "67657443617465676f7269657312382e6d6167656e746f2e636174616c6f" .
            "6753746f726566726f6e744170692e70726f746f2e43617465676f726965" .
            "73476574526571756573741a392e6d6167656e746f2e636174616c6f6753" .
            "746f726566726f6e744170692e70726f746f2e43617465676f7269657347" .
            "6574526573706f6e7365220032d5040a0e56617269616e74536572766963" .
            "651290010a15496d706f727450726f6475637456617269616e747312392e" .
            "6d6167656e746f2e636174616c6f6753746f726566726f6e744170692e70" .
            "726f746f2e496d706f727456617269616e7473526571756573741a3a2e6d" .
            "6167656e746f2e636174616c6f6753746f726566726f6e744170692e7072" .
            "6f746f2e496d706f727456617269616e7473526573706f6e736522001290" .
            "010a1544656c65746550726f6475637456617269616e747312392e6d6167" .
            "656e746f2e636174616c6f6753746f726566726f6e744170692e70726f74" .
            "6f2e44656c65746556617269616e7473526571756573741a3a2e6d616765" .
            "6e746f2e636174616c6f6753746f726566726f6e744170692e70726f746f" .
            "2e44656c65746556617269616e7473526573706f6e73652200128d010a12" .
            "47657450726f6475637456617269616e747312392e6d6167656e746f2e63" .
            "6174616c6f6753746f726566726f6e744170692e70726f746f2e50726f64" .
            "75637456617269616e74526571756573741a3a2e6d6167656e746f2e6361" .
            "74616c6f6753746f726566726f6e744170692e70726f746f2e50726f6475" .
            "637456617269616e74526573706f6e73652200128c010a10476574566172" .
            "69616e74734d61746368123a2e6d6167656e746f2e636174616c6f675374" .
            "6f726566726f6e744170692e70726f746f2e4f7074696f6e53656c656374" .
            "696f6e526571756573741a3a2e6d6167656e746f2e636174616c6f675374" .
            "6f726566726f6e744170692e70726f746f2e50726f647563745661726961" .
            "6e74526573706f6e736522004228e202254d6167656e746f5c436174616c" .
            "6f6753746f726566726f6e744170695c4d65746164617461620670726f74" .
            "6f33"
        ), true);

        static::$is_initialized = true;
    }
}
