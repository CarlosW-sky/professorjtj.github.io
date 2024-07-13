# index
# Base64编码和解码
# 计算SHA256哈希值

import base64

encoded_data = "0U7Sk0SmeTmTpa2TmzRkzpgYmiuPmvlRpOmMSASSmLSmuOmcSmVogCyRgPm8obsOmUKm9Ej4RmQKclOmHzIQSmsaUcSkhAMpSm0aaHSmXQaSJmnPm5Pmjai3Sm1Qi7Km8ImeUm4KmiSmqmRiUmhTmYJkrSmtJmzSmpUmaOksKmF_d5SmY1VJHkfMmXUmDRmqSmxSmWFjaIkfSmaSm3egaUmvmRmPm6TmGUmcPm5UmsSmEKmmKmnOmoJm1UmkUmMSm0PmWSmQKmbTm3UmZUmmUmnPe3PmjBj1SmbSmOVmaKVDQm6SmIRmDPkLVmFTm4VimRmvjacUmCVmLTm4xhfRmw4hXRmXLkJRmKXg2UmMRmROkNTmqVmyTm96ijRm0EjyRk1LmgRmbQmYRmTLkgVmnQmWKkjVmQob7Qm1VmhVmZLkPNmHoboUmzTm_SmuQmpVm_ZdAPk_zWZBAg6diCjudG9fF_Ae4OPjbKVWmmfRyJkjBIRWmBvRMDPvlEZWmmsR93AYWmdWmgIRbWmuBIlWmyTRfWmwCR1BAlAAiAA"
padding = len(encoded_data) % 4
if padding != 0:
    encoded_data += "=" * (4 - padding)

decoded_data = base64.b64decode(encoded_data).decode('utf-8', errors='replace')
decoded_data