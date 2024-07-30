public class Solution {
    public int[] TwoSum(int[] nums, int target) {
        Dictionary<int, int> map = new Dictionary<int, int>();

        // Iterate through the array
        for (int i = 0; i < nums.Length; i++) {
            // Calculate the complement
            int complement = target - nums[i];

            // Check if the complement exists in the dictionary
            if (map.ContainsKey(complement)) {
                // Return the indices of the complement and the current number
                return new int[] { map[complement], i };
            }

            // Add the current number and its index to the dictionary
            map[nums[i]] = i;
        }
        throw new Exception("No two sum solution");
    }
}