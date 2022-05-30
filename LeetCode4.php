<?php
    class Solution {

        /**
         * @param Integer[] $nums1
         * @param Integer[] $nums2
         * @return Float
         */
        function findMedianSortedArrays($nums1, $nums2) {
            $merge=array_merge($nums1,$nums2);
            sort($merge);
            $num=count($merge);
            if($num%2==0){
                $ans=($merge[$num/2-1]+$merge[$num/2])/2;
            }
            else{
                $ans=$merge[($num-1)/2];
            }
            $final_ans=sprintf("%.5f",$ans);
            // $final=floatval($final_ans);
            return $final_ans;
        }
    }
?>