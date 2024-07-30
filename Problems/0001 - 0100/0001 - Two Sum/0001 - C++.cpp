class Solution {
public:
    vector<int> twoSum(vector<int>& nums, int target) {

        vector<int> solution;

        unordered_set<int> s;

        for(int i = 0; i < nums.size(); ++i)
        {
            int sum = target - nums[i];

            if(s.find(sum) == s.end())
            {
                s.insert(nums[i]);
            }
            else
            {
                solution.push_back(i);
                
                int prevNumIndex = distance(nums.begin(), find(nums.begin(), 
                                                            nums.end(), sum));
                solution.push_back(prevNumIndex);

                break;
            }
        }

        return solution;

    }
};