import java.util.*;

class Solution {
    public int[] twoSum(int[] nums, int target) {
        
        for (int d = 1; d < nums.length; d++) {
            for (int r = d; r < nums.length; r++) {
                int l = r - d;
                if (nums[l] + nums[r] == target) {
                    
                    return new int[] { l, r };
                }
            }
        }
        
        return new int[0];
    }
}