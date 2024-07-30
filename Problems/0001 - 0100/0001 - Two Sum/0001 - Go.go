func twoSum(nums []int, target int) []int {
    hashMapVar := make(map[int]int)
    for i := 0; i < len(nums);i++ {
       hashMapVar[nums[i]] = i 
    }
    for  j := 0; j <len(nums)-1;j++ {
        rem := target -nums[j]
        if k,ok := hashMapVar[rem]; ok && j != k {
            return []int{j,k}
        }
    }
    return nil
}